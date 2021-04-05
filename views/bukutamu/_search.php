<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BukutamuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bukutamu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'NamaOrangTua') ?>

    <?= $form->field($model, 'NoHP') ?>

    <?= $form->field($model, 'NamaSiswa') ?>

    <?= $form->field($model, 'NoHPSiswa') ?>

    <?php // echo $form->field($model, 'Alamat') ?>

    <?php // echo $form->field($model, 'AsalSekolah') ?>

    <?php // echo $form->field($model, 'Kelas') ?>

    <?php // echo $form->field($model, 'Keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
