<?php

return [
    'database' => [
        'connection' => 'mysql:host=127.0.0.1',
        'name' => 'laracasts-php-01',
        'user' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];