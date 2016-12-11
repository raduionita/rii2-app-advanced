<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../modules/common/configs/config.dev.php'),
    require(__DIR__ . '/../modules/frontend/configs/config.dev.php')
);

(new yii\web\Application($config))->run();