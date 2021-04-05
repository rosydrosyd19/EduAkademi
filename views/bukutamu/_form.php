<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bukutamu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bukutamu-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'ID')->textInput() ?> -->

    <?= $form->field($model, 'NamaOrangTua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NoHP')->textInput() ?>

    <?= $form->field($model, 'NamaSiswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NoHPSiswa')->textInput() ?>

    <?= $form->field($model, 'Alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'AsalSekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
