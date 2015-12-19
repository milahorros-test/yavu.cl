<?php
return [
    'multi-auth' => [
        'empresa' => [
            'driver' => 'database',
            'table' => 'empresas'
        ],
        'user' => [
            'driver' => 'eloquent',
            'model'  => milahorros\User::class,
            'table' => 'users'
        ],
        'admin' => [
            'driver' => 'eloquent',
            'model'  => milahorros\Admin::class,
            'table' => 'admins'
        ]
    ],
    'password' => [
        'email'  => 'emails.users.password',
        'table'  => 'password_resets',
        'expire' => 60,
    ],
];
