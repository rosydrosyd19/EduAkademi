<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dataprovinsi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dataprovinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaProvinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
