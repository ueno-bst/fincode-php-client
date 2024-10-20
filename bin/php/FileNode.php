<?php

namespace OpenAPI\Fixer;

use FilesystemIterator;
use PhpParser\Node\Stmt\Enum_;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\Namespace_;
use PhpParser\Parser;
use PhpParser\ParserFactory;
use RecursiveIteratorIterator;
use Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator;

class FileNode implements \Stringable
{
    readonly public string $fullName;

    public function __construct(
        readonly public string $path,
        readonly public string $ns,
        readonly public string $name,
    )
    {
        $this->fullName = '\\' . ltrim($this->ns . '\\' . $this->name, '\\');
    }

    public function __toString(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $base_path
     * @param Parser|null $parser
     * @return static[]
     */
    public static function make(string $base_path, Parser $parser = null): array
    {
        $parser = $parser ?? (new ParserFactory())->createForNewestSupportedVersion();

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($base_path, FilesystemIterator::SKIP_DOTS),
        );

        $files = [];

        foreach ($iterator as $item) {
            if ($item->isFile() && $item->getExtension() === 'php') {
                $real_path = $item->getRealPath();
                $nodes = $parser->parse(file_get_contents($real_path));

                if ($nodes !== null) {
                    foreach ($nodes as $node) {
                        if ($node instanceof Namespace_) {
                            $namespace = $node->name;

                            foreach ($node->stmts as $stmt) {
                                if ($stmt instanceof Class_ || $stmt instanceof Enum_) {
                                    $files[] = new FileNode($real_path, $namespace, $stmt->name->name);
                                }
                            }
                        } else if ($node instanceof Class_|| $node instanceof Enum_) {
                            $files[] = new FileNode($real_path, '', $node->name->name);
                        }
                    }
                }
            }
        }

        usort($files, function (FileNode $a, FileNode $b) {
            return strlen($b->name) <=> strlen($a->name);
        });

        return $files;
    }

}