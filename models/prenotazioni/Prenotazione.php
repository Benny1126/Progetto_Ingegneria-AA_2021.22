<?php

namespace app\models\prenotazioni;
use app\models\Caregivers\Caregiver;
use Yii;

/**
 * This is the model class for table "prenotazioni".
 *
 * @property int $id
 * @property string|null $titolo
 * @property string|null $descrizione
 * @property string|null $data_creazione
 * @property string|null $cf_c
 *
 * @property Caregiver $cfC
 */

class Prenotazione extends \yii\db\ActiveRecord
{
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prenotazioni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {

        return [
            [['data_prenotazione'], 'safe'],
            [['titolo'], 'string', 'max' => 255],
            [['descrizione'], 'string', 'max' => 500],
            [['descrizione'], 'required'],
            [['titolo'], 'required'],
            [['data_prenotazione'], 'required'],
            ['data_prenotazione', 'validateDate'],
            [['cf_c'], 'string', 'max' => 17],
            [['cf_c'], 'exist', 'skipOnError' => true, 'targetClass' => Caregiver::className(), 'targetAttribute' => ['cf_c' => 'cf']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titolo' => 'Titolo',
            'descrizione' => 'Descrizione',
            'data_prenotazione' => 'Data_prenotazione',
            'cf_c' => 'Cf C',
        ];
    }

    /**
     * Gets query for [[CfC]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCfC()
    {
        return $this->hasOne(Caregiver::className(), ['cf' => 'cf_c']);
    }

    public function validateDate(){
        $limit= date("Y-m-d");

            $data_prenotazione = $this->getData();

            if (!$this->hasErrors() && $data_prenotazione <= $limit) {
    
                $this->addError('data_prenotazione','La data non può essere minore o uguale della data odierna.');
            }
    }   
        public function getData()
        {
            return $this->data_prenotazione;
        }       
}
