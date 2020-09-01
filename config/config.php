<?php

return [
    "title" => "Homework 6",
    "menu" => [
        [
            'src' => '/?path=home/index',
            'title' => 'Главная'
        ],
        [
            'src' => '/?path=gallery/index',
            'title' => 'Галлерея'
        ],
        [
            'src' => '/?path=goods/index',
            'title' => 'Товары'
        ],
        [
            'src' => '/?path=account/register',
            'title' => 'Войти'
        ]
    ],
    "db" => [
        "dsn" => "mysql:dbname=trialdb2;host=localhost",
        "user" => "michese",
        "password" => "1234"
    ]
];
