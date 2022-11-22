<?php

return [
    'target_php_version' => 8.1,
    'directory_list' => [
        'src'
    ],
    'exclude_analysis_directory_list' => [
        'vendor'
    ],
    'plugins' => [
        'AlwaysReturnPlugin',
        'DollarDollarPlugin',
        'UnreachableCodePlugin',
        'DuplicateArrayKeyPlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
    ]
];