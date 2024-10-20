<?php

namespace OpenAPI\Fixer\NodeVisitor;

use PhpParser\Node;

class ModelConverter extends \PhpParser\NodeVisitorAbstract
{
    public function __construct(
        public readonly array $files = []
    )
    {
    }

    /**
     * @inheritDoc
     */
    public function leaveNode(Node $node)
    {
        if (
            $node instanceof Node\Stmt\Class_ &&
            str_ends_with($node->namespacedName, '\\Model\\' . $node->name->name)
        ) {
            $property = $node->getProperty('openAPITypes');

            if ($property instanceof Node\Stmt\Property && $property->isStatic()) {
                foreach ($property->props as $prop) {
                    if ($prop->default instanceof Node\Expr\Array_) {
                        $this->replaceClassName($prop->default);
                    }
                }
            }
        }
    }

    private function replaceClassName(Node\Expr\Array_ $array): void
    {
        foreach ($array->items as $item) {
            if ($item->value instanceof Node\Scalar\String_) {
                $src = $dist = $item->value->value;

                foreach ($this->files as $file) {
                    $dist = preg_replace_callback(
                        "/((?<ns>\\\\?(\w+\\\\)+){$file->name}|(?<!\w){$file->name})(?!\w)/",
                        function (array $matches) use ($file): string {
                            if ($matches[0] === $file->name) {
                                return $file->fullName;
                            }
                            return $matches[0];
                        },
                        $dist
                    );
                }

                if ($src !== $dist) {
                    $item->value->value = $dist;
                }
            }
        }
    }
}