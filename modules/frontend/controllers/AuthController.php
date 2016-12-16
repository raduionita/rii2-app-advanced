<?php

namespace frontend\controllers;

use frontend\forms\LoginForm;
use yii\web\Controller;

class AuthController extends Controller
{
    public $layout = '@frontend/views/layout';

    public function actionSignup()
    {
        die('here');
    }

    public function actionLogin()
    {
        if (\Yii::$app->user->isGuest === false) {
            return $this->redirect('/');
        }

        // 0 show 1st form (username)
        // 1 half auth | find by emal/user | show 2nd form (password)
        // 2 full auth & redirect

        $form = new LoginForm();

        if ($form->load(\Yii::$app->request->post()) && $form->login()) {
            return $this->redirect('/');
        }

        return $this->render('login', ['form' => $form]);
    }

    public function actionLogout()
    {
        \Yii::$app->user->logout();
        return $this->redirect('login');
    }
}