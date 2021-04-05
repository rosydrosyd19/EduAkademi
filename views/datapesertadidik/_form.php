<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datapesertadidik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datapesertadidik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdPesertaDidik')->textInput() ?>

    <?= $form->field($model, 'IdKelas')->textInput() ?>

    <?= $form->field($model, 'NamaSiswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jenjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TempatLahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TanggalLahir')->textInput() ?>

    <?= $form->field($model, 'NamaAyah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaIbu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NomerHpOrtu')->textInput() ?>

    <?= $form->field($model, 'Alamat')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
