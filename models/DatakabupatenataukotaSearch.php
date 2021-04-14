<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datakabupatenataukota;

/**
 * DatakabupatenataukotaSearch represents the model behind the search form of `app\models\Datakabupatenataukota`.
 */
class DatakabupatenataukotaSearch extends Datakabupatenataukota
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdKabupatenAtauKota'], 'integer'],
            [['NamaKabupatenAtauKota', 'Keterangan', 'IdProvinsi'], 'safe'],
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
        $query = Datakabupatenataukota::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // $this->load($params);

        // if (!$this->validate()) {
        //     // uncomment the following line if you do not want to return any records when validation fails
        //     // $query->where('0=1');
        //     return $dataProvider;
        // }

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->joinWith('idProvinsi');

        // grid filtering conditions
        $query->andFilterWhere([
            'IdKabupatenAtauKota' => $this->IdKabupatenAtauKota,
            // 'IdProvinsi' => $this->IdProvinsi,
        ]);

        $query->andFilterWhere(['like', 'NamaKabupatenAtauKota', $this->NamaKabupatenAtauKota])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan])
            ->andFilterWhere(['like', 'dataprovinsi.NamaProvinsi', $this->IdProvinsi]);

        return $dataProvider;
    }
}
