<?php

namespace frontend\controllers;

use common\models\Product;
use yii\web\Controller;

class SiteController extends Controller
{
    public $layout = '@frontend/views/layout';

    public function actionIndex()
    {
        $product = new Product(1);
        $product->sync();

        return $this->render('index');
    }
}
