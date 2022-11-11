<?php

/**
 * Extension Manager/Repository config file for ext "t3dev".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 't3dev',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Scanelec\\T3dev\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Philippe Rey',
    'author_email' => 'rey@scanelec.de',
    'author_company' => 'scanelec',
    'version' => '1.0.0',
];
