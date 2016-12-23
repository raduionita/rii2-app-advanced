<?php

namespace restapi\controllers;

use \yii\rest\Controller;

class ProductsController extends Controller
{
    public function actionUpdate($id)
    {
        // put/patch => products/<id>
        return $this->asJson(['controller' => 'products', 'action' => 'update', 'id' => $id]);
    }

    public function actionDelete($id)
    {
        // delete => products/<id>
        return $this->asJson(['controller' => 'products', 'action' => 'delete', 'id' => $id]);
    }

    public function actionView($id)
    {
        // get/head => products/<id>
        return $this->asJson(['controller' => 'products', 'action' => 'view', 'id' => $id]);
    }

    public function actionCreate()
    {
        // post => products
        return $this->asJson(['controller' => 'products', 'action' => 'create']);
    }

    public function actionIndex()
    {
        // get/head => products
        return $this->asJson(['controller' => 'products', 'action' => 'index']);
    }

    public function actionOptions()
    {
        // verb => users/<id>
        // verb => users
        return $this->asJson(['controller' => 'products', 'action' => 'options']);
    }
}
