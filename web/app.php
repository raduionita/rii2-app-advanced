<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../modules/common/configs/config.php'),
    require(__DIR__ . '/../modules/backend/configs/config.php')
);

// echo Yii::getAlias('yii');
// print_r($config); die;

try {
  (new \yii\web\Application($config))->run();
} catch (\Throwable $e) {
  echo '<pre>';
  echo $e->getMessage(), "\n";
  print_r($e->getTraceAsString());
}
