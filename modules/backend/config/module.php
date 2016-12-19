<?php
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
return [
    'modules' => [
        'backend' => [
            'class' => 'backend\Module',
        ],
    ],
    'components' => [
        'urlManager' => [
            'rules' => require(__DIR__ . '/routes.php'),
        ],
    ],
    'params' => require(__DIR__ . '/params.php'),
];
