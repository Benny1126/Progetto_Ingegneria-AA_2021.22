<?php

namespace app\models\Caregivers;

use Yii;
use app\models\accessi\NewUser;

// model che istanzia un oggetto di tipo caregiver

class Caregiver extends NewUser
{

    public static function tableName()
    {
        return 'caregiver';
    }


    public function rules()
    {
        return [
            [['cf'], 'required'],
            [['ruolo'], 'integer'],
            [['cf'], 'string', 'max' => 17],
            [['nome', 'cognome', 'email', 'pass', 'authKey', 'accessToken'], 'string', 'max' => 255],
            [['cf'], 'unique'],
        ];
    }

 
    public function attributeLabels()
    {
        return [
            'cf' => 'Cf',
            'nome' => 'Nome',
            'cognome' => 'Cognome',
            'email' => 'Email',
            'ruolo' => 'Ruolo',
            'pass' => 'Pass',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }


    public function getPazientis()
    {
        return $this->hasMany(Pazienti::className(), ['cf_care' => 'cf']);
    }


    public function getPrenotazionis()
    {
        return $this->hasMany(Prenotazioni::className(), ['cf_c' => 'cf']);
    }


}
