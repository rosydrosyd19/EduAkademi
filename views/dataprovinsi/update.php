<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dataprovinsi */

$this->title = 'Update Data Provinsi: ' . $model->NamaProvinsi;
$this->params['breadcrumbs'][] = ['label' => 'Data Provinsi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NamaProvinsi, 'url' => ['view', 'id' => $model->IdProvinsi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dataprovinsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
