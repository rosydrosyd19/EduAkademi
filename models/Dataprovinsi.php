<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dataprovinsi".
 *
 * @property int $IdProvinsi
 * @property string|null $NamaProvinsi
 * @property string|null $Keterangan
 *
 * @property Datakabupatenataukota[] $datakabupatenataukotas
 */
class Dataprovinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dataprovinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdProvinsi'], 'required'],
            [['IdProvinsi'], 'integer'],
            [['NamaProvinsi'], 'string', 'max' => 52],
            [['Keterangan'], 'string', 'max' => 191],
            [['IdProvinsi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdProvinsi' => 'Id Provinsi',
            'NamaProvinsi' => 'Nama Provinsi',
            'Keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Datakabupatenataukotas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatakabupatenataukotas()
    {
        return $this->hasMany(Datakabupatenataukota::className(), ['IdProvinsi' => 'IdProvinsi']);
    }
}
