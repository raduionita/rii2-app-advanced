<?php
Yii::setAlias('@common', dirname(__DIR__));

return [
    'id'         => 'app-standard',
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/vendor',
    'basePath'   => dirname(dirname(dirname(__DIR__))),
    'components' => [
        'user' => [
            'class'         => 'yii\web\User',
            'identityClass' => 'app\modules\common\model\User',
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
