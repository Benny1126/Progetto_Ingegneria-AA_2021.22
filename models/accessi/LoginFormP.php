<?php

namespace app\models\accessi;

use Yii;
use yii\base\Model;


class LoginFormP extends LoginForm
{
    public $username;
    public $pass;
    public $ruolo;
    public $rememberMe = true;

    private $_user = false;
    public $end='@gmail.com';



    public function rules()
    {
        return [
            [['username'], 'required'],
            // username and password are both required
            [['pass'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()

            ['pass', 'validatePassword'],
            
        ];
    }


    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->username=$this->username.$this->end;
            $this->_user = NewUser::findByUsername($this->username);
        }
        return $this->_user;
    }
}
