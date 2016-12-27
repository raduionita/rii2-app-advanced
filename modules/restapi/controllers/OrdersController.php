<?php

namespace restapi\controllers;

use \rii\rest\Controller;
use \rii\rest\Output;

class OrdersController extends Controller
{
    public function actionIndex()
    {
        return $this->asJson(new Output(204, [])); // no content
        return $this->asJson(new Output(200, [['resource' => 'orders', 'id' => 1], ['resource' => 'orders', 'id' => 2]]));
    }

    public function actionView(int $id)
    {
        return $this->asJson(new Output(404, null)); // no found
        return $this->asJson(new Output(200, ['resource' => 'orders', 'id' => $id]));
    }

    public function actionCreate()
    {
        // TODO: Implement actionCreate() method.
    }

    public function actionUpdate(int $id)
    {
        // TODO: Implement actionUpdate() method.
    }

    public function actionDelete(int $id)
    {
        // TODO: Implement actionDelete() method.
    }

    public function actionOptions()
    {
        // TODO: Implement actionOptions() method.
    }
}
