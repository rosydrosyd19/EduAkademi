<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bukutamu;

/**
 * BukutamuSearch represents the model behind the search form of `app\models\Bukutamu`.
 */
class BukutamuSearch extends Bukutamu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'NoHP', 'NoHPSiswa'], 'integer'],
            [['NamaOrangTua', 'NamaSiswa', 'Alamat', 'AsalSekolah', 'Kelas', 'Keterangan'], 'safe'],
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
        $query = Bukutamu::find();

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
            'ID' => $this->ID,
            'NoHP' => $this->NoHP,
            'NoHPSiswa' => $this->NoHPSiswa,
        ]);

        $query->andFilterWhere(['like', 'NamaOrangTua', $this->NamaOrangTua])
            ->andFilterWhere(['like', 'NamaSiswa', $this->NamaSiswa])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'AsalSekolah', $this->AsalSekolah])
            ->andFilterWhere(['like', 'Kelas', $this->Kelas])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan]);

        return $dataProvider;
    }
}
