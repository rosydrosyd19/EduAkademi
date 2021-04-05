<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datakelas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datakelas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdKelas')->textInput() ?>

    <?= $form->field($model, 'IdCabang')->textInput() ?>

    <?= $form->field($model, 'IdKabupatenAtauKota')->textInput() ?>

    <?= $form->field($model, 'NamaKelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jenjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
