<?php

namespace app\models\Caregivers;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Paziente\Pazienti;

// questo model serve a cercare i paziente passando il codice fiscale del caregiver istanziato
class cercaP extends Pazienti
{

    public function rules()
    {
        return [
            [['username', 'email', 'nome', 'cognome', 'cf', 'pass', 'authKey', 'accessToken', 'cf_care'], 'safe'],
            [['ruolo'], 'integer'],
        ];
    }


    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }


    public function search($params,$codice)
    {
        $query = Pazienti::find();

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
            'cf_care' => $codice,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cognome', $this->cognome])
            ->andFilterWhere(['like', 'cf', $this->cf])
            ->andFilterWhere(['like', 'pass', $this->pass])
            ->andFilterWhere(['like', 'authKey', $this->authKey])
            ->andFilterWhere(['like', 'accessToken', $this->accessToken])
            ->andFilterWhere(['like', 'cf_care', $this->cf_care]);

        return $dataProvider;
    }
}
