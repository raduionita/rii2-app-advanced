<?php
Yii::setAlias('@data',   dirname(__DIR__) . '/data');
Yii::setAlias('@root',   dirname(__DIR__));
Yii::setAlias('@common', dirname(__DIR__) . '/modules/common');
return \yii\helpers\ArrayHelper::merge(
require(dirname(__DIR__) . '/modules/backend/config/config.php'),
require(dirname(__DIR__) . '/modules/frontend/config/config.php'),
require(dirname(__DIR__) . '/modules/restapi/config/config.php'),
require(dirname(__DIR__) . '/modules/console/config/config.php'),
[
    'id'          => 'app-standard',
    'vendorPath'  => '@root/vendor',
    'basePath'    => '@root',
    'runtimePath' => '@root/runtime',
    'components'  => [
        'cache' => [
            'class'        => '\yii\caching\MemCache',
            'useMemcached' => true,
            'keyPrefix'    => 'app',
        ],
        'db' => [
            'class'               => '\yii\db\Connection',
            'dsn'                 => 'sqlite:@data/standard.db',
            'enableSchemaCache'   => true,
            'schemaCacheDuration' => 3600,
            'schemaCache'         => [
                'class'     => '\yii\caching\ApcCache', // this little mofo beats file, memcache & mysql
                'useApcu'   => true,                    // but it's limitted :)
                'keyPrefix' => 'db',
            ],
        ],
        'request' => [
            'cookieValidationKey' => 'THIS NEEDS TO BE SET!',
        ],
        'session' => [
            'class' => '\yii\web\Session',
        ],
        'user' => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => false, // true if authKey is stored
            'enableSession'   => true,
        ],
        'urlManager' => [
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'enableStrictParsing' => true,
            'normalizer'          => [
                'class'  => '\yii\web\UrlNormalizer', // use temporary redirection instead of permanent
                'action' => \yii\web\UrlNormalizer::ACTION_REDIRECT_TEMPORARY, // 302
            ],
        ],
    ],
]);
