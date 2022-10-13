<?php

namespace app\models\accessi;

use Yii;

/**
 * This is the model class for table "utenti".
 * @property string|null $username
 * @property string|null $email
 * @property string|null $pass
 * @property string|null $authKey
 * @property string|null $accessToken
 */
class NewUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
 
    public static function tableName()
    {
        return 'utenti';
    }

  
    public function rules()
    {
        return [
            [['email','username','nome','cognome','pass', 'authKey', 'accessToken'], 'string', 'max' => 255],
            [['cf'], 'string', 'max' => 16],
            [['cf'], 'string', 'min' => 16],
            ['cf','unique'],
            ['username','unique'],
            [['email'], 'validateEmail'],
            [['ruolo'], 'integer'],
            ['pass','required'],
        ];
    }

 
    public function attributeLabels()
    {
        return [
            'ruolo' => 'Ruolo',
        ];
    }

    public static function findIdentity($cf)
    {
        return self::findOne($cf);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['accessToken'=>$token]);
    }

 
    public static function findByUsername($email)
    {   
        return self::findOne(['email'=>$email]);
    }

    public function getId()
    {
        return $this->cf;
    }
    public function getRuolo()
    {
        return $this->ruolo;
    }



    public function getAuthKey()
    {
        return $this->authKey;
    }


    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($pass)
    {
        return password_verify($pass,$this->pass);
    }

    public function validateEmail(){
        $checkgmail= 'gmail.com';
        $checklibero= '@libero.it';
        $checkoutlook= '@outlook.com';
        $checkme= '@me.com';
        $checkhotmail= '@hotmail.it';
        $checkmail= '@mail.com';
        $email = $this->getEmail();
        if(str_contains( $email, 'gmail.com') !== true){
                $this->addError('email','La mail da te inserita non è valida');
        }
}   
    public function getEmail()
    {
        return $this->email;
    }  
}
