<?php

namespace common\models;

use yii\base\NotSupportedException;
use yii\base\Object;
use yii\web\IdentityInterface;

class User extends Object implements IdentityInterface
{
    public const STATUS_DELETED = 0b00;
    public const STATUS_ACTIVE  = 0b01;

    /** @var string */
    protected $authKey;
    /** @var  int */
    protected $id;
    /** @var string */
    protected $username;
    /** @var string hashed */
    protected $password;
    /** @var @string */
    protected $email;
    /** @var int */
    protected $status;

    public function getAuthKey() : string
    {
        return $this->authKey;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function setUsername(string $username) : void
    {
        $this->username = $username;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function setPassword(string $password) : void
    {
        $this->password = \Yii::$app->security->generatePasswordHash($password);
    }

    public function validateAuthKey($authKey) : bool
    {
        return $this->getAuthKey() === $authKey;
    }

    public function validatePassword(string $password) : bool
    {
        return \Yii::$app->security->validatePassword($password, $this->password);
    }

    public static function findIdentity($id) : ?User
    {
        // @todo Replace with db user, or something...
        return new User(['id' => 0, 'username' => 'test', 'password' => 'test']);
    }

    public static function findIdentityByAccessToken($token, $type = null) : ?User
    {
        throw new NotSupportedException('"findIdentityByAccessToken()" is not implemented.');
    }

    public static function findByUsername(string $username) : ?User
    {
        // @todo Replace with db user, or something...
        return new User(['id' => 0, 'username' => 'test', 'password' => 'test']);
    }
}