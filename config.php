<?php

return [
    'database' => [
        'db'    => 'mysql',
        'host'  => '127.0.0.1',
        'dbname'    => 'test',
        'username'  => 'root',
        'password'  => '',
        'options'    => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];