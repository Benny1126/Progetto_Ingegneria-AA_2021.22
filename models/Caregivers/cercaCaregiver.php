<?php

namespace app\models\Caregivers;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Caregivers\Caregiver;

//questo model cerca tutti i caregiver presenti nel db
class cercaCaregiver extends Caregiver
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ruolo'], 'integer'],
            [['cf', 'nome', 'cognome', 'email', 'pass', 'authKey', 'accessToken'], 'safe'],
        ];
    }


    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }


    public function search($params)
    {
        $query = Caregiver::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {

            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'email' => $this->email,
            'ruolo' => $this->ruolo,
        ]);

        $query->andFilterWhere(['like', 'cf', $this->cf])
            ->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cognome', $this->cognome])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'pass', $this->pass])
            ->andFilterWhere(['like', 'authKey', $this->authKey])
            ->andFilterWhere(['like', 'accessToken', $this->accessToken]);

        return $dataProvider;
    }
}
