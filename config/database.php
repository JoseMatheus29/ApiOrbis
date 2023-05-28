<?php

use Illuminate\Support\Str;

return [


    'default' => env('DB_CONNECTION', 'mysql'),


    'connections' => [

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '127.0.0.1:3306'),
            'database'  => env('DB_DATABASE', 'orbisbd'),
            'username'  => env('DB_USERNAME', 'root'),
            'password'  => env('DB_PASSWORD', 'root'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
            ],
        

    ],


    'migrations' => 'migrations',



];