<?php

namespace frontend\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public $layout = '@frontend/views/layout';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
