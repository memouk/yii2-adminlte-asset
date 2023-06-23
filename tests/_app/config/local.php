<?php

return [
    'defaultRoute' => 'test',
    'aliases' => [
        'repo' => '/repo',
        'tests/app' => '@repo/tests/_app',
        'memouk/adminlte' => '@repo',
        '@memouk/adminlte/web' => '@memouk/adminlte/web',
        '@memouk/adminlte/widgets' => '@memouk/adminlte/widgets',
        '@memouk/adminlte/helpers' => '@memouk/adminlte/helpers',
    ],
    'controllerNamespace' => 'tests\app\controllers',
    'components' => [
        'urlManager' => [
            'rules' => [
                'param/<id>' => 'sub/action/param'
            ]
        ]
    ]
];