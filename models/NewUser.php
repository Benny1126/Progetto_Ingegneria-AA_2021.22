<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "utenti".
 * @property int $id
 * @property string|null $username
 * @property string|null $email
 * @property string|null $pass
 * @property string|null $authKey
 * @property string|null $accessToken
 */
class NewUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utenti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'string', 'max' => 255],
            ['email','unique'],
            [['pass', 'authKey', 'accessToken'], 'string', 'max' => 255],
            [['ruolo'], 'integer'],
            ['pass','required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ruolo' => 'Ruolo',
        ];
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['accessToken'=>$token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {   
        return self::findOne(['username'=>$username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }
    public function getRuolo()
    {
        return $this->ruolo;
    }


    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($pass)
    {
        return password_verify($pass,$this->pass);
    }
}
