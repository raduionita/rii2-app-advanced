<?php
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
//Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');

return [
  'modules' => [
        'backend' => [
            'class' => 'app\modules\backend\Module',
            // ... other configurations for the module ...
        ],
    ],
];