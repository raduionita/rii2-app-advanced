<?php

namespace app\modules\console;

class Module extends \yii\base\Module
{
  public function init()
  {
      parent::init();
      if (Yii::$app instanceof \yii\console\Application) {
          $this->controllerNamespace = 'app\modules\console\commands';
      }
  }
}