<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\datakabupatenataukota;
use app\models\Dataprovinsi;

/* @var $this yii\web\View */
/* @var $model app\models\Datacabang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datacabang-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- depdrop -->
    <?php $company = ArrayHelper::map(Dataprovinsi::find()->all(),'IdProvinsi','NamaProvinsi'); ?>


    <?= 
        // $form->field($model, 'cat')->dropDownList($catList, ['id'=>'cat-id']);
        $form->field($model, 'IdKabupatenAtauKota')->widget(Select2::classname(), [
            'data' => $company,
            'options' => ['placeholder' => '- Pilih Provinsi -'],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ])->label('Nama Provinsi');
    ?>

    <?=
        $form->field($model, 'IdCabang')->widget(DepDrop::classname(), [
            'options'=>['IdKabupatenAtauKota'=>'IdCabang'],
            'pluginOptions'=>[
                'depends'=>['IdProvinsi'],
                'placeholder'=>'Select...',
                'url'=>Url::to(['/datacabang/create'])
            ]
        ]);
    ?>

    <!-- depdrop -->

    <?= $form->field($model, 'NamaCabang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
