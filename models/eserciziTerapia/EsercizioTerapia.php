<?php

namespace app\models\eserciziTerapia;
use app\models\Esercizi\Esercizio;
use app\models\Terapia\Terapia;
use Yii;

/**
 * This is the model class for table "esercizio_terapia".
 *
 * @property string $codice_esercizio
 * @property string|null $nome
 * @property int|null $codice_terapia
 *
 * @property Esercizio $codiceEsercizio
 * @property Terapia $codiceTerapia
 */
class EsercizioTerapia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'esercizio_terapia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codice_esercizio', 'codice_terapia'], 'required'],
            [['codice_terapia'], 'integer'],
            [['codice_esercizio'], 'string', 'max' => 255],
            [['valutazione'],'integer','max' => 10],
            [['attivita_svolta'],'integer'],
            [['risposta1','risposta2','risposta3','risposta4','risposta5', 'risposta6', 'risposta7','risposta8'], 'string', 'max' => 50],
            [['codice_esercizio', 'codice_terapia'], 'unique', 'targetAttribute' => ['codice_esercizio', 'codice_terapia']],
            [['codice_terapia'], 'exist', 'skipOnError' => true, 'targetClass' => Terapia::className(), 'targetAttribute' => ['codice_terapia' => 'id_terapia']],
            [['codice_esercizio'], 'exist', 'skipOnError' => true, 'targetClass' => Esercizio::className(), 'targetAttribute' => ['codice_esercizio' => 'id_esercizio']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codice_esercizio' => 'Codice Esercizio',
            'codice_terapia' => 'Codice Terapia',
        ];
    }

    /**
     * Gets query for [[CodiceEsercizio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodiceEsercizio()
    {
        return $this->hasOne(Esercizio::className(), ['id_esercizio' => 'codice_esercizio']);
    }

    /**
     * Gets query for [[CodiceTerapia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodiceTerapia()
    {
        return $this->hasOne(Terapia::className(), ['id_terapia' => 'codice_terapia']);
    }
}
