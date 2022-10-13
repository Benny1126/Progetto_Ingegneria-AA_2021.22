<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class LoginFormP extends LoginForm
{
    public $username;
    public $pass;
    public $ruolo;
    public $rememberMe = true;

    private $_user = false;


    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Utenti::findByUsername($this->username);
        }

        return $this->_user;
    }
}
