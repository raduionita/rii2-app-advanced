<?php
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
return [
    'modules' => [
        'frontend' => [
            'class' => 'frontend\Module',
        ],
    ],
    'components' => [
        'urlManager' => [
            'rules' => require(__DIR__ . '/routes.php'),
        ],
    ],
    'params' => require(__DIR__ . '/params.php'),
];