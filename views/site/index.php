<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bukutamu */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<div border="1" style="width: 100%;
     height: auto;
     border: 4px solid black;
     border-radius: 10px;
     font-size:10px">
    <h2 style="padding-left:50px">Selamat Datang</h2>
    <p style="padding-left:50px">Ini Merupakan halaman sistem administrasi Bimbingan Belajar edubarnd</p>
</div>

<table style="width:100%;margin-top:50px" >
  <tr>
    <td style="width:40%" valign="top">
        <div border="1" style="width: 96%;
        height: auto;
        border: 4px solid black;
        border-radius: 10px;
        font-size:10px;
        padding:10px 0px 20px 0px">
            <h2 style="padding-left:50px" ><b>20 </b>siswa</h2>
    </td>

    <td>
        <div class="bukutamu-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'NamaOrangTua')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'NoHP')->textInput() ?>

        <?= $form->field($model, 'NamaSiswa')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'NoHPSiswa')->textInput() ?>

        <?= $form->field($model, 'Alamat')->textInput(['rows' => 6]) ?>

        <?= $form->field($model, 'AsalSekolah')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Kelas')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        </div>
    </td>
  </tr>
</table> 

