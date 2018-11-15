<?php
return [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],
    'controllerMap' => [
        'dump' => [
            'class' => 'hzhihua\dump\DumpController',
            'tableOptions' => 'ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci',
        ],
    ],
];
