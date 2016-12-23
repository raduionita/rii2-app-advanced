<?php
try {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
    require(__DIR__ . '/../vendor/autoload.php');
    require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
    (new \rii\web\Application(require(__DIR__ . '/../config/config.php')))->run();
} catch (\Throwable $e) {
    echo '<pre>';
    echo $e->getMessage();
    echo PHP_EOL;
    echo $e->getTraceAsString();
}
