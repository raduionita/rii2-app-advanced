<?php

namespace app\modules\common\components;

class Controller extends \yii\web\Controller
{
    public function init()
    {
        $this->layout = '@'.$this->module->id.'/views/layout';
        parent::init();
    }
}