<?php

namespace frontend\forms;

use common\models\User;
use yii\base\Model;

class LoginForm extends Model
{
    /** @var string */
    public $username;
    /** @var string */
    public $password;
    /** @var null|User */
    protected $user = null;

    /**
     * {@inheritdoc}
     */
    public function rules() : array
    {
        return [
            'required' => [['username', 'password'], 'required', 'message' => 'Field required!'],
            //'remember' => ['remember',  'boolean'],
            //'username' => ['username',  'email'],
            'password' => ['password',  'validatePassword'],
            //'password' => [['password'], 'string', 'max' => 32],
        ];
    }

    public function validatePassword($field/*, $params*/) : void
    {
        if (!$this->hasErrors()) {
            $user = &$this->getUser();
            if (!$user || $user->validatePassword($this->password)) {
                $this->addError($field, "Incorrect username or password!");
            }
        }
    }

    public function login()
    {
        return $this->validate() && \Yii::$app->user->login($this->getUser(), 3600 * 24 * 30);
    }

    protected function &getUser() : ?User
    {
        if (is_null($this->user)) {
            $this->user = User::findByUsername($this->username);
        }
        return $this->user;
    }
}