<?php

return [

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'), // default tetap 'web' agar user biasa tetap bisa login
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    'guards' => [
        'web' => [ // guard untuk user (customer)
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [ // guard khusus admin
            'driver' => 'session',
            'provider' => 'admins',
        ],
    ],

    'providers' => [
        'users' => [ // provider user (customer)
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        'admins' => [ // provider admin
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class, // Pastikan kamu punya model Admin di app/Models/Admin.php
        ],
    ],

    'passwords' => [
        'users' => [ // reset password untuk user
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],

        'admins' => [ // reset password untuk admin (kalau mau aktifkan reset admin)
            'provider' => 'admins',
            'table' => 'password_reset_tokens', // bisa disamakan atau dipisah, sesuai kebutuhan
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
