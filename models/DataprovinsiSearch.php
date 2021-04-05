<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dataprovinsi;

/**
 * DataprovinsiSearch represents the model behind the search form of `app\models\Dataprovinsi`.
 */
class DataprovinsiSearch extends Dataprovinsi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdProvinsi'], 'integer'],
            [['NamaProvinsi', 'Keterangan'], 'safe'],
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
        $query = Dataprovinsi::find();

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
            'IdProvinsi' => $this->IdProvinsi,
        ]);

        $query->andFilterWhere(['like', 'NamaProvinsi', $this->NamaProvinsi])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan]);

        return $dataProvider;
    }
}
