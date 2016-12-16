<?php
Yii::setAlias('@common', dirname(dirname(__DIR__)) . '/common');
Yii::setAlias('@root',   dirname(dirname(dirname(__DIR__))));
Yii::setAlias('@data',   dirname(dirname(dirname(__DIR__))) . '/data');
return [
    'id'          => 'app-standard',
    'vendorPath'  => '@root/vendor',
    'basePath'    => '@root',
    'runtimePath' => '@root/runtime',
    'components'  => [
        'cache' => [
            'class'   => '\yii\caching\ApcCache', // this little mofo beats file, memcache & mysql
            'useApcu' => true,                    // but it's limitted :)
        ],
        'db' => [
            'class'               => '\yii\db\Connection',
            'dsn'                 => 'sqlite:@data/standard.db',
            'enableSchemaCache'   => true,
            'schemaCacheDuration' => 3600,
            'schemaCache'         => 'cache',
        ],
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
