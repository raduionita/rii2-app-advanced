<?php

namespace frontend\controllers;

use common\models\Product;
use yii\web\Controller;

class SiteController extends Controller
{
    public $layout = '@frontend/views/layout';

    public function actionIndex()
    {
        $product = new Product(1, 'Apple iPhone 3.2');
        $product->sync();

        echo '<pre>';
        echo 'product';
        print_r($product->toArray());
        echo 'dirty';
        print_r($product->getDirtyAttributes());

        try {
            $product->save();
        } catch (\Exception $e) {
            echo '<pre>';
            print_r($e->getMessage()); die;
        }

        return $this->render('index');
    }
}
