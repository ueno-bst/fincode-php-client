<?php

use OpenAPI\Fixer\FileNode;
use OpenAPI\Fixer\NodeVisitor\ApiClassConverter;
use OpenAPI\Fixer\NodeVisitor\EnumNumberConverter;
use OpenAPI\Fixer\NodeVisitor\ModelConverter;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitor\NameResolver;
use PhpParser\Parser;
use PhpParser\ParserFactory;
use PhpParser\PhpVersion;
use PhpParser\PrettyPrinter\Standard;

require __DIR__ . '/vendor/autoload.php';

$class = new class(__DIR__ . '/gen/lib', __DIR__ . '/lib') {

    readonly public string $src;
    readonly public string $dest;

    /**
     * @var FileNode[];
     */
    readonly public array $classes;
    readonly private Parser $parser;

    public function __construct(
        string $src,
        string $dest
    )
    {
        if (!file_exists($src) || !is_dir($src)) {
            throw new RuntimeException('Source directory does not exist: ' . $src);
        }

        if (!file_exists($dest) || !is_dir($dest)) {
            mkdir($dest, 0777, true);
        }

        $this->src = realpath($src);
        $this->dest = realpath($dest);

        $this->parser = (new ParserFactory())->createForVersion(PhpVersion::fromString('8.1'));


        $this->classes = FileNode::make($src, $this->parser);
    }

    private function traverser(): NodeTraverser
    {
        $traverser = new NodeTraverser();

        $traverser->addVisitor(new NameResolver());
        $traverser->addVisitor(new EnumNumberConverter());
        $traverser->addVisitor(new ModelConverter($this->classes));
        $traverser->addVisitor(new ApiClassConverter($this->classes));

        return $traverser;
    }

    public function __invoke(): void
    {
        $traverser = $this->traverser();
        $printer = new Standard();

        foreach ($this->classes as $class) {
            $src = $class->path;
            $dest = $this->dest . DIRECTORY_SEPARATOR . substr($src, strlen($this->src));

            if (!file_exists(dirname($dest))) {
                mkdir(dirname($dest), 0777, true);
            }

            $src_ast = $this->parser->parse(file_get_contents($src));

            $dest_ast = $traverser->traverse($src_ast);

            file_put_contents($dest, $printer->prettyPrintFile($dest_ast));
            echo $src . " : " . $dest . PHP_EOL;
        }
    }
};

$class();