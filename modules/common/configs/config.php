<?php
Yii::setAlias('@common', dirname(dirname(__DIR__)) . '/common');
Yii::setAlias('@root',   dirname(dirname(dirname(__DIR__))));
return [
    'id'          => 'app-standard',
    'vendorPath'  => '@root/vendor',
    'basePath'    => '@root',
    'runtimePath' => '@root/runtime',
    'components'  => [
        'session' => [
            'class' => '\yii\web\Session',
            // id => ''
        ],
        'request' => [
            'cookieValidationKey' => 'THIS NEEDS TO BE SET!',
        ],
        'user' => [
            'class'           => 'yii\web\User',
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => false, // true if authKey is stored
            'enableSession'   => true,
        ],
        'urlManager' => [
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'enableStrictParsing' => true,
            'normalizer' => [
                'class' => 'yii\web\UrlNormalizer', // use temporary redirection instead of permanent
                'action' => \yii\web\UrlNormalizer::ACTION_REDIRECT_TEMPORARY,
            ],
        ],
    ],
];
