<?php

namespace app\models\accessi;

use Yii;
use yii\base\Model;
use app\models\accessi\Caregiver;


class LoginFormC extends LoginForm
{
    public $username;
    public $pass;
    public $ruolo;
    public $rememberMe = true;

    private $_user = false;


    public function getUser() {
        if ($this->_user === false) {
            $this->_user = Caregiver::findByUsername($this->username);
        }

        return $this->_user;
    }
}
