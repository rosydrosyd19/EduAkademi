<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Datacabang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datacabang-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- select2 Nama Kabupaten/Kota -->
    <?= 
        $form->field($model, 'IdKabupatenAtauKota')->widget(Select2::classname(), [
            'data' => $data,
            'options' => ['placeholder' => '- Pilih Kabupaten/Kota -'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('Nama Kabupaten/Kota'); 
    ?>

    <?= $form->field($model, 'NamaCabang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
