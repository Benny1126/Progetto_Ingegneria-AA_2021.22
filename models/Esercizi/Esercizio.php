<?php

namespace app\models\Esercizi;

use Yii;

/**
 * This is the model class for table "esercizio".
 *
 * @property string $id_esercizio
 * @property string|null $nome
 *
 * @property EsercizioTerapia $esercizioTerapia
 */
class Esercizio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'esercizio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_esercizio'], 'required'],
            [['id_esercizio', 'nome'], 'string', 'max' => 255],
            [['id_esercizio'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_esercizio' => 'Id Esercizio',
            'nome' => 'Nome',
        ];
    }

    /**
     * Gets query for [[EsercizioTerapia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEsercizioTerapia()
    {
        return $this->hasOne(EsercizioTerapia::className(), ['codice_esercizio' => 'id_esercizio']);
    }
}
