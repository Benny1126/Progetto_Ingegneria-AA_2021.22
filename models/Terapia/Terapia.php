<?php

namespace app\models\Terapia;

use Yii;
use app\models\Paziente\Pazienti;

/**
 * This is the model class for table "terapia".
 *
 * @property int $id_terapia
 * @property string|null $nome
 * @property string|null $cf_paziente
 *
 * @property Pazienti $cfPaziente
 */
class Terapia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'terapia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cf_paziente'], 'string', 'max' => 17],
            [['cf_paziente'], 'unique', 'message' =>'il paziente ha già una terapia'],
            [['nome'], 'string', 'max' => 255],
            [['cf_paziente'], 'exist', 'skipOnError' => true, 'targetClass' => Pazienti::className(), 'targetAttribute' => ['cf_paziente' => 'cf']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_terapia' => 'Id Terapia',
            'nome' => 'Nome',
            'cf_paziente' => 'Cf Paziente',
        ];
    }

    /**
     * Gets query for [[CfPaziente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCfPaziente()
    {
        return $this->hasOne(Pazienti::className(), ['cf' => 'cf_paziente']);
    }

    /**
     * Gets query for [[CodiceEsercizios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodiceEsercizios()
    {
        return $this->hasMany(Esercizio::className(), ['id_esercizio' => 'codice_esercizio'])->viaTable('esercizio_terapia', ['codice_terapia' => 'id_terapia']);
    }

    /**
     * Gets query for [[EsercizioTerapias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEsercizioTerapias()
    {
        return $this->hasMany(EsercizioTerapia::className(), ['codice_terapia' => 'id_terapia']);
    }
}
