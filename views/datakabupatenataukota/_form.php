<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Datakabupatenataukota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datakabupatenataukota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= 
        $form->field($model, 'IdProvinsi')->widget(Select2::classname(), [
            'data' => $data,
            'options' => ['placeholder' => '- Pilih Provinsi -'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('Nama Provinsi'); 
    ?>

    <?= $form->field($model, 'NamaKabupatenAtauKota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
