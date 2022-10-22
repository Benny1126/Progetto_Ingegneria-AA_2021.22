<?php

namespace app\models\eserciziTerapia;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\eserciziTerapia\EsercizioTerapia;

/**
 * cercaET represents the model behind the search form of `app\models\EsercizioTerapia`.
 */

 //questo 
class cercaEsercizio extends EsercizioTerapia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codice_esercizio'], 'safe'],
            [['codice_terapia'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params,$codice)
    {
        $query = EsercizioTerapia::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'codice_terapia' => $codice,
        ]);

        $query->andFilterWhere(['like', 'codice_esercizio', $this->codice_esercizio]);

        return $dataProvider;
    }
}
