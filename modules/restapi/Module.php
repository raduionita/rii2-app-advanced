<?php

namespace app\modules\restapi;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        \Yii::configure($this, require(__DIR__ . '/configs/module.php'));
    }
}