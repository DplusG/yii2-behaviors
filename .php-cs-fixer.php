<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in([__DIR__]);

$config = PhpCsFixer\Config::create()
    ->setUsingCache(false)
    ->setRules([
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
