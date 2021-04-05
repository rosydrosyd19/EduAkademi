<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datakelas".
 *
 * @property int $IdKelas
 * @property int|null $IdCabang
 * @property int|null $IdKabupatenAtauKota
 * @property string|null $NamaKelas
 * @property string|null $Jenjang
 * @property string|null $Keterangan
 *
 * @property Datacabang $idCabang
 * @property Datakabupatenataukota $idKabupatenAtauKota
 * @property Datapesertadidik[] $datapesertadidiks
 */
class Datakelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datakelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdKelas'], 'required'],
            [['IdKelas', 'IdCabang', 'IdKabupatenAtauKota'], 'integer'],
            [['NamaKelas', 'Jenjang'], 'string', 'max' => 9],
            [['Keterangan'], 'string', 'max' => 191],
            [['IdKelas'], 'unique'],
            [['IdCabang'], 'exist', 'skipOnError' => true, 'targetClass' => Datacabang::className(), 'targetAttribute' => ['IdCabang' => 'IdCabang']],
            [['IdKabupatenAtauKota'], 'exist', 'skipOnError' => true, 'targetClass' => Datakabupatenataukota::className(), 'targetAttribute' => ['IdKabupatenAtauKota' => 'IdKabupatenAtauKota']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdKelas' => 'Id Kelas',
            'IdCabang' => 'Id Cabang',
            'IdKabupatenAtauKota' => 'Id Kabupaten Atau Kota',
            'NamaKelas' => 'Nama Kelas',
            'Jenjang' => 'Jenjang',
            'Keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[IdCabang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCabang()
    {
        return $this->hasOne(Datacabang::className(), ['IdCabang' => 'IdCabang']);
    }

    /**
     * Gets query for [[IdKabupatenAtauKota]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdKabupatenAtauKota()
    {
        return $this->hasOne(Datakabupatenataukota::className(), ['IdKabupatenAtauKota' => 'IdKabupatenAtauKota']);
    }

    /**
     * Gets query for [[Datapesertadidiks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatapesertadidiks()
    {
        return $this->hasMany(Datapesertadidik::className(), ['IdKelas' => 'IdKelas']);
    }
}
