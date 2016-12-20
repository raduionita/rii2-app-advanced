<?php
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
return [
    'modules' => [
        'console' => [
            'class'               => 'console\Module',
            'controllerNamespace' => 'console\commands',
        ],
    ],
    'components' => [
//        'urlManager' => [
//            'rules' => require(__DIR__ . '/routes.php'),
//        ],
    ],
];
