<?php
require __DIR__ . '/../../vendor/autoload.php';

$new = new class() {

    readonly array $files;

    function __construct(
        readonly string $ns = 'OpenAPI\\Fincode',
        readonly string $base_path = __DIR__ . '/src'
    )
    {
        $files = [];
        foreach ($this->getIterator() as $file) {

            if ($file->isFile() && $file->getExtension() === 'php') {
                $real_path = $file->getRealPath();
                $relation_path = ltrim(str_replace($base_path, '', $real_path), DIRECTORY_SEPARATOR);
                $class_name = $this->ns . '\\' . str_replace('/', '\\', substr($relation_path, 0, -4));

                if (class_exists($class_name)) {
                    $files[$class_name] = $real_path;
                }
            }
        }

        uksort($files, function(string $a, string $b): int {
            return strlen($this->getClassName($b)) <=> strlen($this->getClassName($a));
        });

        $this->files = $files;
    }

    /**
     * @param string $class_name
     * @return array
     */
    #[\JetBrains\PhpStorm\ArrayShape(['ns' => 'string', 'class' => 'string'])]
    function parseClassName(string $class_name): array
    {
        if (preg_match('/^(?<ns>\\\?(\w+\\\)*)(?<class>\w+)$/', $class_name, $matches)) {
            return ['ns' => trim($matches['ns'], '\\'), 'class' => $matches['class']];
        }

        return ['ns' => '', 'class' => ''];
    }

    function getNamespace(string $class_name): string
    {
        return $this->parseClassName($class_name)['ns'];
    }

    function getClassName(string $class_name): string
    {
        return $this->parseClassName($class_name)['class'];
    }

    /**
     * @return RecursiveIteratorIterator|iterable<SplFileInfo>
     */
    function getIterator(): RecursiveIteratorIterator|iterable
    {
        return new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->base_path),
        );
    }

    function run() {
        foreach ($this->files as $file_path) {
            echo "challenge to {$file_path} ... ";
            $code = $this->replaceFile($file_path);

            if ($code !== null) {
                echo "success\n";
                file_put_contents($file_path, $code);
            } else {
                echo "none\n";
            }
        }
    }

    function replaceFile(string $file_path): ?string {
        $src = $dist = file_get_contents($file_path);

        foreach (array_keys($this->files) as $class_name) {
            $dist = $this->replaceClassName($dist, $class_name);
        }

        if ($src === $dist) {
            return null;
        }

        return $dist;
    }

    function replaceClassName(string $code, string $class_string): string
    {
        $ns = $this->getNamespace($class_string);
        $class_name = $this->getClassName($class_string);

        $regex = preg_quote($class_name, '/');
        $regex = "/(?<!new |funciton |class )(?<ns>\\\?(\w+\\\)+)?{$regex}(?!\w)/m";

        return preg_replace_callback($regex, function(array $matches) use ($class_string, $class_name): string {
            if ($matches[0] === $class_name) {
                return '\\' . ltrim($class_string, '\\');
            }

            return $matches[0];
        }, $code);
    }
};

$new->run();
//$i = $new->replaceClassName(file_get_contents(__DIR__ . '/Fincode/Model/PaymentSessionTransaction.php'), '\App\OpenAPI\Fincode\Model\PaymentSessionPayType');
//var_dump($i);
exit();

$namespace = 'App\\OpenAPI\\Fincode';

$base_path = __DIR__ . '/Fincode';

/**
 * @var iterator<int,\SplFileInfo> $iterator
 */
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($base_path),
);

$files = [];

foreach ($iterator as $value) {
    if ($value->isFile() && $value->getExtension() === 'php') {
        $real_path = $value->getRealPath();
        $relation_path = ltrim(str_replace($base_path, '', $real_path), DIRECTORY_SEPARATOR);
        $class_name = $namespace . '\\' . str_replace('/', '\\', substr($relation_path, 0, -4));

        if (class_exists($class_name)) {
            $files[$class_name] = $real_path;
        }
    }
}

krsort($files, SORT_STRING);

foreach (array_valueS($files) as $file_path) {
    $content = file_get_contents($file_path);

    foreach (array_keys($files) as $class_ns) {
        $class_name = preg_replace("/.*\\\(\s+)$/", "\1", $class_ns);
        var_dump($class_ns . ' => ' . $class_name);
        break;
//        $regex = preg_quote()
//        preg_replace_callback('/(?<ns>\\?(\w+\\)*)')
    }
}

