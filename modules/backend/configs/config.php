<?php
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');

return yii\helpers\ArrayHelper::merge(require(__DIR__ . '/../../common/configs/config.php'), [
    'modules' => [
        'backend' => [
            'class' => 'app\modules\backend\Module',
            // ... other configurations for the module ...
        ],
    ],
    'components' => [
        'urlManager' => [
            'rules' => require(__DIR__ . '/routes.php'),
        ],
    ]
]);
