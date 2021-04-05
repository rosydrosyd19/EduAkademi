<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatakelasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datakelas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdKelas') ?>

    <?= $form->field($model, 'IdCabang') ?>

    <?= $form->field($model, 'IdKabupatenAtauKota') ?>

    <?= $form->field($model, 'NamaKelas') ?>

    <?= $form->field($model, 'Jenjang') ?>

    <?php // echo $form->field($model, 'Keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
