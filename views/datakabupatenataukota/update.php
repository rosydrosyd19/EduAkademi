<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datakabupatenataukota */

$this->title = 'Ubah Data Kabupaten/Kota: ' . $model->NamaKabupatenAtauKota;
$this->params['breadcrumbs'][] = ['label' => 'Datakabupatenataukotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NamaKabupatenAtauKota, 'url' => ['view', 'id' => $model->IdKabupatenAtauKota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datakabupatenataukota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
