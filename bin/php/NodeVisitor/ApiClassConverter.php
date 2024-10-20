<?php

namespace OpenAPI\Fixer\NodeVisitor;

use OpenAPI\Fixer\FileNode;
use PhpParser\Comment\Doc;
use PhpParser\Node;
use PhpParser\NodeAbstract;

class ApiClassConverter extends \PhpParser\NodeVisitorAbstract
{
    /**
     * @param FileNode[] $classes
     */
    public function __construct(
        public readonly array $classes = []
    )
    {
    }

    public function leaveNode(Node $node)
    {
        if (
            $node instanceof Node\Stmt\Class_ &&
            str_ends_with($node->namespacedName, '\\Api\\' . $node->name->name)
        ) {
            foreach ($node->getMethods() as $method) {
                if ($method->getDocComment() !== null) {
                    $doc = $this->enterDoc($method->getDocComment());

                    if ($doc instanceof Doc) {
                        $method->setDocComment($doc);
                    }
                }

                if (
                    preg_match('/^\w+WithHttpInfo$/', $method->name) &&
                    $method->isPublic() &&
                    !$method->isStatic()
                ) {
                    foreach ($method->getStmts() as $stmt) {
                        $this->enterMethod($stmt);
                    }
                }
            }
        }
    }

    /**
     * @param NodeAbstract $node
     * @return void
     */
    public function enterMethod(NodeAbstract $node): void
    {
        if ($node instanceof Node\Scalar\String_) {
            $this->enterString($node);
        }

        foreach ($node->getSubNodeNames() as $name) {
            if (!property_exists($node, $name)) {
                continue;
            }

            foreach (is_array($node->$name) ? $node->$name : [$node->$name] as $sub) {
                if ($sub instanceof NodeAbstract) {
                    $this->enterMethod($sub);
                }
            }
        }
    }

    /**
     * @param Node\Scalar\String_ $string
     * @return void
     */
    public function enterString(Node\Scalar\String_ $string): void
    {
        foreach ($this->classes as $class) {
            if ($class->name === $string->value) {
                echo "String to : " . $string->value . " -> " . $class->fullName . "\n";
                $string->value = $class->fullName;
            }
        }
    }

    public function enterDoc(Doc $doc): Doc
    {
        $src = $dist = $doc->getText();

        foreach ($this->classes as $class) {
            $dist = preg_replace_callback(
                "/((\\\\?(\w+\\\\)+){$class->name}|(?<!\w){$class->name})(?!\w)/",
                function (array $matches) use ($class): string {
                    if ($matches[0] === $class->name) {
                        return $class->fullName;
                    }
                    return $matches[0];
                },
                $dist,
            );
        }

        if ($src !== $dist) {
            return new Doc($dist);
        }

        return $doc;
    }

}