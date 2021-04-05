<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datacabang;

/**
 * DatacabangSearch represents the model behind the search form of `app\models\Datacabang`.
 */
class DatacabangSearch extends Datacabang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdCabang', 'IdKabupatenAtauKota'], 'integer'],
            [['NamaCabang', 'Keterangan'], 'safe'],
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
        $query = Datacabang::find();

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
            'IdCabang' => $this->IdCabang,
            'IdKabupatenAtauKota' => $this->IdKabupatenAtauKota,
        ]);

        $query->andFilterWhere(['like', 'NamaCabang', $this->NamaCabang])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan]);

        return $dataProvider;
    }
}
