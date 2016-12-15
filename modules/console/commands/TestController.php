<?php

namespace console\commands;

// use raducorp\yiibase\Command\Command;

class TestController extends \yii\console\Controller
{
  protected function configure()
  {
    // set name
    // set description
    // set help
    // add argument
  }

  public function actionTest()
  {
      echo 'console:TestCommand::actionTest()';
  }

//  protected function run()
//  {
//    // do something
//  }
}