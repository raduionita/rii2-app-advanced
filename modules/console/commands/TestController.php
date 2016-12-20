<?php

namespace console\commands;

use yii\console\Controller;

/**
 * Test, the useless command controller
 */
class TestController extends Controller
{
    public $defaultAction = 'test';

    /**
     * Test, the useless command controller action
     */
    public function actionTest()
    {
        echo 'console:TestController::actionTest()';
    }
}