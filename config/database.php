<?php

use Illuminate\Support\Str;

return [


    'default' => env('DB_CONNECTION', 'mysql'),


    'connections' => [

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'containers-us-west-166.railway.app:6542'),
            'database'  => env('DB_DATABASE', 'railway'),
            'username'  => env('DB_USERNAME', 'root'),
            'password'  => env('DB_PASSWORD', 'aAkn1UBK4pwbIUycSqOd'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
            ],
        

    ],


    'migrations' => 'migrations',



];