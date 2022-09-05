<?php

$finder = PhpCsFixer\Finder::create()
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true)
    ->exclude('vendor')
    ->in([__DIR__]);

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules([
        '@PHP74Migration' => true,
        // '@PHP74Migration:risky' => true,
        // '@PHPUnit75Migration:risky' => true,
        // '@PhpCsFixer' => true,
        // '@PhpCsFixer:risky' => true,
        '@Symfony' => true,
        'phpdoc_align' => false,
        'phpdoc_summary' => false,
        'general_phpdoc_tag_rename' => false,
        'phpdoc_inline_tag_normalizer' => false,
        'phpdoc_tag_type' => false,
        'increment_style' => ['style' => 'pre'],
        'heredoc_to_nowdoc' => false,
        'cast_spaces' => false,
        'include' => false,
        'phpdoc_no_package' => false,
        'concat_space' => ['spacing' => 'one'],
        'ordered_imports' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);

return $config;
