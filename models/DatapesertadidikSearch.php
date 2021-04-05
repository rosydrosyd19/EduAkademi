<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datapesertadidik;

/**
 * DatapesertadidikSearch represents the model behind the search form of `app\models\Datapesertadidik`.
 */
class DatapesertadidikSearch extends Datapesertadidik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdPesertaDidik', 'IdKelas', 'NomerHpOrtu'], 'integer'],
            [['NamaSiswa', 'Jenjang', 'Kelas', 'TempatLahir', 'TanggalLahir', 'NamaAyah', 'NamaIbu', 'Alamat'], 'safe'],
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
        $query = Datapesertadidik::find();

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
            'IdPesertaDidik' => $this->IdPesertaDidik,
            'IdKelas' => $this->IdKelas,
            'TanggalLahir' => $this->TanggalLahir,
            'NomerHpOrtu' => $this->NomerHpOrtu,
        ]);

        $query->andFilterWhere(['like', 'NamaSiswa', $this->NamaSiswa])
            ->andFilterWhere(['like', 'Jenjang', $this->Jenjang])
            ->andFilterWhere(['like', 'Kelas', $this->Kelas])
            ->andFilterWhere(['like', 'TempatLahir', $this->TempatLahir])
            ->andFilterWhere(['like', 'NamaAyah', $this->NamaAyah])
            ->andFilterWhere(['like', 'NamaIbu', $this->NamaIbu])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat]);

        return $dataProvider;
    }
}
