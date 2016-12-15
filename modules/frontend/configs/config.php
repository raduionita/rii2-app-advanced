<?php
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
return yii\helpers\ArrayHelper::merge(require(__DIR__ . '/../../common/configs/config.php'), [
    'modules' => [
        'frontend' => [
            'class' => 'frontend\Module',
            // ... other configurations for the module ...
        ],
    ],
    'components' => [
        'urlManager' => [
            'rules' => require(__DIR__ . '/routes.php'),
        ]
    ]
]);