<?php

/**
 * @generated
 * @link https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/HEAD/doc/config.rst
 */
$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
    ->exclude('test')
    ->exclude('tests')
;

$config = new PhpCsFixer\Config();

$config->setParallelConfig(\PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());

return $config->setRules([
        '@PSR12' => true,
    '@Symfony' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
