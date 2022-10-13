<?php

namespace app\models\Paziente;
use app\models\Caregivers\Caregiver;
use app\models\accessi\NewUser;
use yii\web\UploadedFile;
use app\models\Paziente\UploadForm;

use yii\helpers\Url;

use Yii;

/**
 * This is the model class for table "utenti".
 *
 * @property string|null $username
 * @property string|null $email
 * @property int|null $ruolo
 * @property string|null $pass
 * @property string|null $authKey
 * @property string|null $accessToken
 */
class Pazienti extends NewUser
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pazienti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'unique'],
            [['ruolo', 'premi_bronzo', 'premi_argento', 'premi_oro', 'premi_platino'], 'integer'],
            [['username','pass', 'authKey', 'accessToken','cf_care'], 'string', 'max' => 255],
            [['diagnosi'], 'string', 'max' => 1000],
            [['cf_care'], 'exist', 'skipOnError' => true, 'targetClass' => Caregiver::className(), 'targetAttribute' => ['cf_care' => 'cf']],
            [['foto'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg','checkExtensionByMimeType' => false],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            // 'cf' => 'CF',
            // 'username' => 'Username',
            // 'ruolo' => 'Ruolo',
            // 'pass' => 'Pass',
            // 'authKey' => 'Auth Key',
            // 'accessToken' => 'Access Token',
            // 'cf_care'=>'Cf_care',
            // 'diagnosi'=>'Diagnosi',
            'username' => 'Username',
            'email' => 'Email',
            'nome' => 'Nome',
            'cognome' => 'Cognome',
            'cf' => 'Cf',
            'ruolo' => 'Ruolo',
            'pass' => 'Pass',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'diagnosi' => 'Diagnosi',
            'cf_care' => 'Cf Care',
            'premi_bronzo' => 'Premi Bronzo',
            'premi_argento' => 'Premi Argento',
            'premi_oro' => 'Premi Oro',
            'premi_platino' => 'Premi Platino',
            'foto' => 'Foto',
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
        return $this->cf;
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


    public function getTerapia()
    {
        return $this->hasMany(Terapia::className(), ['cf_paziente' => 'cf']);
    }

    
    public function uploadPath() 
    {
        return Url::to('uploads/');
    }

        public function getImageUrl()
    {
        if (strpos($this->foto, 'jpeg') !== false) {
        return Url::to('uploads/' . $this->id .'.'.'jpeg' , true);
        }
        else if(strpos($this->foto, 'png') !== false){
            return Url::to('uploads/' . $this->id .'.'.'png' , true);
        }
        else if (strpos($this->foto, 'jpg') !== false){
            return Url::to('uploads/' . $this->id .'.'.'jpg' , true);
        }
    }   
        /**
     * Gets query for [[CfCare]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCfCare()
    {
        return $this->hasOne(Caregiver::className(), ['cf' => 'cf_care']);
    }

    /**
     * Gets query for [[Terapias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTerapias()
    {
        return $this->hasMany(Terapia::className(), ['cf_paziente' => 'cf']);
    }
}
