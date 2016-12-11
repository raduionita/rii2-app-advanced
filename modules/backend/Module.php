<?php

namespace app\modules\backend;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
      
        // specific module params...
        $this->params['foo'] = 'bar';
        
        // initialize the module with the configuration loaded from config.php
        \Yii::configure($this, require(__DIR__ . '/configs/module.php'));
        
        // other initialization code ...
    }
}