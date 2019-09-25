<?php
return [
    'name' => 'WikS HXS-task1',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /* dodane DB - bez wpływu chyba */
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii_db_hxs1',
            'username' => 'yii_db_hxs1',
            'password' => '6qX4Qz1CzaC8Bhen',
            'charset' => 'utf8',
            //'emulatePrepare'=>true,  // wymagane przez pewne instalacje MySQL     
        ],        
    ],
];
