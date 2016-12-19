<?php

namespace backend\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        echo '<pre>';
        print_r(\Yii::$app->request);
        echo 'backend:SiteController::actionIndex()';
    }
}