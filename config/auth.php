<?php
return [
    'multi-auth' => [
        'empresa' => [
            'driver' => 'database',
            'table' => 'empresas'
        ],
        'user' => [
            'driver' => 'eloquent',
            'model'  => yavu\User::class,
            'table' => 'users'
        ],
        'admin' => [
            'driver' => 'eloquent',
            'model'  => yavu\Admin::class,
            'table' => 'admins'
        ]
    ],
    'password' => [
        'email'  => 'emails.users.password',
        'table'  => 'password_resets',
        'expire' => 60,
    ],
];
