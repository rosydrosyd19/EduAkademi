<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatapesertadidikSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datapesertadidik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdPesertaDidik') ?>

    <?= $form->field($model, 'IdKelas') ?>

    <?= $form->field($model, 'NamaSiswa') ?>

    <?= $form->field($model, 'Jenjang') ?>

    <?= $form->field($model, 'Kelas') ?>

    <?php // echo $form->field($model, 'TempatLahir') ?>

    <?php // echo $form->field($model, 'TanggalLahir') ?>

    <?php // echo $form->field($model, 'NamaAyah') ?>

    <?php // echo $form->field($model, 'NamaIbu') ?>

    <?php // echo $form->field($model, 'NomerHpOrtu') ?>

    <?php // echo $form->field($model, 'Alamat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
