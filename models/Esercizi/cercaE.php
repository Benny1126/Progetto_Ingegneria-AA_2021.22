<?php

namespace app\models\Esercizi;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Esercizi\Esercizio;

/**
 * cercaE represents the model behind the search form of `app\models\Esercizio`.
 */
class cercaE extends Esercizio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_esercizio', 'nome'], 'safe'],
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
    public function search($params)
    {
        $query = Esercizio::find();

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
        $query->andFilterWhere(['like', 'id_esercizio', $this->id_esercizio])
            ->andFilterWhere(['like', 'nome', $this->nome]);

        return $dataProvider;
    }
}
