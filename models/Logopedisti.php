<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logopedisti".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $email
 * @property int|null $ruolo
 * @property string|null $pass
 * @property string|null $authKey
 * @property string|null $accessToken
 */
class Logopedisti extends NewUser
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logopedisti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ruolo'], 'integer'],
            ['email','unique'],
            [['username', 'email', 'pass', 'authKey', 'accessToken'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'ruolo' => 'Ruolo',
            'pass' => 'Pass',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }
}
