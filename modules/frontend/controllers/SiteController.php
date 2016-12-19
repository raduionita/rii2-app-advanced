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

        echo '<pre>', print_r($product->toArray(), 1);
        echo '<pre>', print_r(\Yii::getAlias('@app'), 1);

        return $this->render('index');
    }
}
