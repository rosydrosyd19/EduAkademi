<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Datakabupatenataukota */

$this->title = $model->IdKabupatenAtauKota;
$this->params['breadcrumbs'][] = ['label' => 'Datakabupatenataukotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="datakabupatenataukota-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdKabupatenAtauKota], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdKabupatenAtauKota], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdKabupatenAtauKota',
            'IdProvinsi',
            'NamaKabupatenAtauKota',
            'Keterangan',
        ],
    ]) ?>

</div>