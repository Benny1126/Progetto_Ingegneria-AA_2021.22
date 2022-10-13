<?php

namespace app\models\Logopedisti;
use app\models\accessi\NewUser;
use Yii;

//model che istanzia un oggetto di tipo logopedisti
class Logopedisti extends NewUser
{

    public static function tableName()
    {
        return 'logopedisti';
    }

 
    public function rules()
    {
        return [
            [['ruolo'], 'integer'],
            ['email','unique'],
            [['email','nome','cognome','pass', 'authKey', 'accessToken'], 'string', 'max' => 255],
        ];
    }

  
    public function attributeLabels()
    {
        return [
            'cf' => 'CF',
            'email' => 'Email',
            'nome' => 'Nome',
            'cognome' => 'Cognome',
            'ruolo' => 'Ruolo',
            'pass' => 'Pass',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }
}
