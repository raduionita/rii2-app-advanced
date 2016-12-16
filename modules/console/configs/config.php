<?php
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
return yii\helpers\ArrayHelper::merge(require(__DIR__ . '/../../common/configs/config.php'), [
    'controllerNamespace' => 'console\commands',
//    'modules' => [
//        'console' => [
//            'class' => 'app\modules\console\Module',
//            // ... other configurations for the module ...
//        ],
//    ],
//    'components' => [
//        // ...
//    ]
]);
