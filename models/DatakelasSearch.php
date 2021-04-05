<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datakelas;

/**
 * DatakelasSearch represents the model behind the search form of `app\models\Datakelas`.
 */
class DatakelasSearch extends Datakelas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdKelas', 'IdCabang', 'IdKabupatenAtauKota'], 'integer'],
            [['NamaKelas', 'Jenjang', 'Keterangan'], 'safe'],
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
        $query = Datakelas::find();

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
            'IdKelas' => $this->IdKelas,
            'IdCabang' => $this->IdCabang,
            'IdKabupatenAtauKota' => $this->IdKabupatenAtauKota,
        ]);

        $query->andFilterWhere(['like', 'NamaKelas', $this->NamaKelas])
            ->andFilterWhere(['like', 'Jenjang', $this->Jenjang])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan]);

        return $dataProvider;
    }
}
