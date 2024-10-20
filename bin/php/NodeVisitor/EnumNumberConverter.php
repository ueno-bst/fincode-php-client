<?php

namespace OpenAPI\Fixer\NodeVisitor;

use PhpParser\Node;

class EnumNumberConverter extends \PhpParser\NodeVisitorAbstract
{
    /**
     * @inheritDoc
     */
    public function leaveNode(Node $node)
    {
        if (
            $node instanceof Node\Stmt\Enum_
            && $node->scalarType instanceof Node\Identifier
            && $node->scalarType->name === 'int'
        ) {
            foreach ($node->stmts as $stmt) {
                if ($stmt instanceof Node\Stmt\EnumCase && str_starts_with($stmt->name, 'NUMBER_')) {
                    $stmt->name->name = substr($stmt->name, 6);
                }
            }
        }
    }

}
