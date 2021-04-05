<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bukutamu".
 *
 * @property int $ID
 * @property string|null $NamaOrangTua
 * @property int|null $NoHP
 * @property string|null $NamaSiswa
 * @property int|null $NoHPSiswa
 * @property string|null $Alamat
 * @property string|null $AsalSekolah
 * @property string|null $Kelas
 * @property string|null $Keterangan
 */
class Bukutamu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukutamu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['ID', 'NoHP', 'NoHPSiswa'], 'integer'],
            [['Alamat'], 'string'],
            [['NamaOrangTua', 'NamaSiswa'], 'string', 'max' => 24],
            [['AsalSekolah'], 'string', 'max' => 30],
            [['Kelas'], 'string', 'max' => 10],
            [['Keterangan'], 'string', 'max' => 191],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NamaOrangTua' => 'Nama Orang Tua',
            'NoHP' => 'No Hp',
            'NamaSiswa' => 'Nama Siswa',
            'NoHPSiswa' => 'No Hp Siswa',
            'Alamat' => 'Alamat',
            'AsalSekolah' => 'Asal Sekolah',
            'Kelas' => 'Kelas',
            'Keterangan' => 'Keterangan',
        ];
    }
}
