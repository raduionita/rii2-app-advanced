<?php
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
return [
    'controllerNamespace' => 'console\commands',
//    'modules' => [
//        'console' => [
//            'class' => 'app\modules\console\Module',
//            // ... other configurations for the module ...
//        ],
//    ],
    'components' => [
        'request' => [
            'class' => '\yii\console\Request',
        ],
    ],
];
