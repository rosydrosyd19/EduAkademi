<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatakabupatenataukotaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datakabupatenataukota-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdKabupatenAtauKota') ?>

    <?= $form->field($model, 'IdProvinsi') ?>

    <?= $form->field($model, 'NamaKabupatenAtauKota') ?>

    <?= $form->field($model, 'Keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
