<?php
return [
    'settings' => [
        'displayErrorDetails' => true,

        // Monolog settings
        'logger' => [
            'name' => 'reqstore',
            'path' => __DIR__ . '/../logs/app.log',
        ],
        'db' => [
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
			'port'		=> '3306',
            'database'  => 'reqstore',
            'username'  => 'reqstore',
            'password'  => 'reqstore',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
];
