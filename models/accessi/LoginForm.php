<?php

namespace app\models\accessi;

use Yii;
use yii\base\Model;


class LoginForm extends Model
{
    public $username;
    public $email;
    public $pass;
    public $ruolo;
    public $rememberMe = true;

    private $_user = false;



    public function rules()
    {
        return [
            [['email'], 'string'],
            // username and password are both required
            [['pass'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['pass', 'validatePassword'],
            
        ];
    }




    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->pass)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
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
            $this->_user = NewUser::findByUsername($this->email);
        }

        return $this->_user;
    }


}
