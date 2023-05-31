<?php

use Illuminate\Support\Str;

return [


    'default' => env('DB_CONNECTION', 'mysql'),


    'connections' => [

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'sql313.epizy.com:3306'),
            'database'  => env('DB_DATABASE', 'epiz_34263002_orbisBd'),
            'username'  => env('DB_USERNAME', 'epiz_34263002'),
            'password'  => env('DB_PASSWORD', 'AJAmJpJFTXi4n'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
            ],
        

    ],


    'migrations' => 'migrations',



];