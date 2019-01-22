<?php
/**
 * Created by Joao Vitor Martins.
 * User: Martins
 * Date: 20/01/2019
 * Time: 01:30
 */

return [
    'settings'=>[
        'displayErrorDetails'=>true,

        'renderer' => [
            'template_path'=>__DIR__.'/../template'
        ],

        'logger' => [
            'name'=>'slim-app',
            'path'=>__DIR__.'/../logs/app.log',
            'level'=>\Monolog\Logger::DEBUG,
        ]

    ]
];
