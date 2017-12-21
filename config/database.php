<?php

$mysql = [
    'driver'      => 'mysql',
    'unix_socket' => env('DB_SOCKET', ''),
    'charset'     => 'utf8mb4',
    'collation'   => 'utf8mb4_unicode_ci',
    'prefix'      => '',
    'strict'      => true,
    'engine'      => null,
];

$pgSql = [
    'driver'  => 'pgsql',
    'charset' => 'utf8',
    'prefix'  => '',
    'sslmode' => 'prefer',
];

$mongoDb = [
    'driver'  => 'mongodb',
    'options' => [
        'connectTimeoutMS' => 1000,
    ],
];

$sqLite = [
    'driver' => 'sqlite',
    'prefix' => '',
];

$sqlSrv = [
    'driver'  => 'sqlsrv',
    'charset' => 'utf8',
    'prefix'  => '',
];

return [

    'default' => env('DB_CONNECTION', 'defaultMysql'),

    'connections' => [

        'defaultMysql' => array_merge($mysql, [
            'host'     => env('MYSQL_HOST', '127.0.0.1'),
            'port'     => env('MYSQL_PORT', '3306'),
            'database' => env('MYSQL_DATABASE', 'test'),
            'username' => env('MYSQL_USERNAME', 'test'),
            'password' => env('MYSQL_PASSWORD', 'test'),
        ]),

        'defaultPgsql' => array_merge($pgSql, [
            'host'     => env('PGSQL_HOST', '127.0.0.1'),
            'port'     => env('PGSQL_PORT', '5432'),
            'database' => env('PGSQL_DATABASE', 'test'),
            'username' => env('PGSQL_USERNAME', 'test'),
            'password' => env('PGSQL_PASSWORD', 'test'),
            'schema'   => env('PGSQL_SCHEMA', 'test'),
        ]),

        'defaultMongodb' => array_merge($mongoDb, [
            'host'     => env('MONGODB_HOST', '127.0.0.1'),
            'port'     => env('MONGODB_PORT', '27017'),
            'database' => env('MONGODB_DATABASE', 'test'),
        ]),

        'defaultSqlsrv' => array_merge($sqlSrv, [
            'host'     => env('SQLSRV_HOST', '127.0.0.1'),
            'port'     => env('SQLSRV_PORT', '1433'),
            'database' => env('SQLSRV_DATABASE', 'test'),
            'username' => env('SQLSRV_USERNAME', 'test'),
            'password' => env('SQLSRV_PASSWORD', 'test'),
        ]),

        'defaultSqlite' => array_merge($sqLite, [
            'database' => env('SQLITE_DATABASE', database_path('database.sqlite')),
        ]),
    ],

    'migrations' => 'migrations',

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host'     => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port'     => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
