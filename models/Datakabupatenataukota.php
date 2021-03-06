<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datakabupatenataukota".
 *
 * @property int $IdKabupatenAtauKota
 * @property int|null $IdProvinsi
 * @property string|null $NamaKabupatenAtauKota
 * @property string|null $Keterangan
 *
 * @property Datacabang[] $datacabangs
 * @property Dataprovinsi $idProvinsi
 * @property Datakelas[] $datakelas
 */
class Datakabupatenataukota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datakabupatenataukota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdProvinsi'], 'integer'],
            [['NamaKabupatenAtauKota'], 'string', 'max' => 52],
            [['Keterangan'], 'string', 'max' => 191],
            [['IdProvinsi'], 'exist', 'skipOnError' => true, 'targetClass' => Dataprovinsi::className(), 'targetAttribute' => ['IdProvinsi' => 'IdProvinsi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdKabupatenAtauKota' => 'Id Kabupaten Atau Kota',
            'IdProvinsi' => 'Id Provinsi',
            'NamaKabupatenAtauKota' => 'Nama Kabupaten Atau Kota',
            'Keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Datacabangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatacabangs()
    {
        return $this->hasMany(Datacabang::className(), ['IdKabupatenAtauKota' => 'IdKabupatenAtauKota']);
    }

    /**
     * Gets query for [[IdProvinsi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdProvinsi()
    {
        return $this->hasOne(Dataprovinsi::className(), ['IdProvinsi' => 'IdProvinsi']);
    }

    /**
     * Gets query for [[Datakelas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatakelas()
    {
        return $this->hasMany(Datakelas::className(), ['IdKabupatenAtauKota' => 'IdKabupatenAtauKota']);
    }
}
