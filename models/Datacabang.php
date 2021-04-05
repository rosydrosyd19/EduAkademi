<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datacabang".
 *
 * @property int $IdCabang
 * @property int|null $IdKabupatenAtauKota
 * @property string|null $NamaCabang
 * @property string|null $Keterangan
 *
 * @property Datakabupatenataukota $idKabupatenAtauKota
 */
class Datacabang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datacabang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdCabang'], 'required'],
            [['IdCabang', 'IdKabupatenAtauKota'], 'integer'],
            [['NamaCabang'], 'string', 'max' => 52],
            [['Keterangan'], 'string', 'max' => 191],
            [['IdCabang'], 'unique'],
            [['IdKabupatenAtauKota'], 'exist', 'skipOnError' => true, 'targetClass' => Datakabupatenataukota::className(), 'targetAttribute' => ['IdKabupatenAtauKota' => 'IdKabupatenAtauKota']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCabang' => 'Id Cabang',
            'IdKabupatenAtauKota' => 'Id Kabupaten Atau Kota',
            'NamaCabang' => 'Nama Cabang',
            'Keterangan' => 'Keterangan',
        ];
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
}
