<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datapesertadidik".
 *
 * @property int $IdPesertaDidik
 * @property int|null $IdKelas
 * @property string|null $NamaSiswa
 * @property string|null $Jenjang
 * @property string|null $Kelas
 * @property string|null $TempatLahir
 * @property string|null $TanggalLahir
 * @property string|null $NamaAyah
 * @property string|null $NamaIbu
 * @property int|null $NomerHpOrtu
 * @property string|null $Alamat
 *
 * @property Datakelas $idKelas
 */
class Datapesertadidik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datapesertadidik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdPesertaDidik'], 'required'],
            [['IdPesertaDidik', 'IdKelas', 'NomerHpOrtu'], 'integer'],
            [['TanggalLahir'], 'safe'],
            [['Alamat'], 'string'],
            [['NamaSiswa', 'NamaAyah', 'NamaIbu'], 'string', 'max' => 24],
            [['Jenjang'], 'string', 'max' => 9],
            [['Kelas'], 'string', 'max' => 10],
            [['TempatLahir'], 'string', 'max' => 48],
            [['IdPesertaDidik'], 'unique'],
            [['IdKelas'], 'exist', 'skipOnError' => true, 'targetClass' => Datakelas::className(), 'targetAttribute' => ['IdKelas' => 'IdKelas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdPesertaDidik' => 'Id Peserta Didik',
            'IdKelas' => 'Id Kelas',
            'NamaSiswa' => 'Nama Siswa',
            'Jenjang' => 'Jenjang',
            'Kelas' => 'Kelas',
            'TempatLahir' => 'Tempat Lahir',
            'TanggalLahir' => 'Tanggal Lahir',
            'NamaAyah' => 'Nama Ayah',
            'NamaIbu' => 'Nama Ibu',
            'NomerHpOrtu' => 'Nomer Hp Ortu',
            'Alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[IdKelas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdKelas()
    {
        return $this->hasOne(Datakelas::className(), ['IdKelas' => 'IdKelas']);
    }
}
