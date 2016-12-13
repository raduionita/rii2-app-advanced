<?php

namespace app\modules\restapi\controllers;

class ProductsController extends \yii\rest\Controller
{
    public function actionUpdate($id)
    {
        // put/patch => products/<id>
        return $this->asJson(['action' => 'update', 'id' => $id]);
    }

    public function actionDelete($id)
    {
        // delete => products/<id>
        return $this->asJson(['action' => 'delete', 'id' => $id]);
    }

    public function actionView($id)
    {
        // get/head => products/<id>
        return $this->asJson(['action' => 'view', 'id' => $id]);
    }

    public function actionCreate()
    {
        // post => products
        return $this->asJson(['action' => 'create']);
    }

    public function actionIndex()
    {
        // get/head => products
        return $this->asJson(['action' => 'index']);
    }

    public function actionOptions()
    {
        // verb => users/<id>
        // verb => users
        return $this->asJson(['action' => 'options']);
    }
}