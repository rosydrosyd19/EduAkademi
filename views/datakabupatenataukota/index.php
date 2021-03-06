<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatakabupatenataukotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Kabupaten/kota';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datakabupatenataukota-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Kabupaten/kota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'IdKabupatenAtauKota',
            [
                'attribute' => 'IdProvinsi',
                'value' => 'idProvinsi.NamaProvinsi',
                'label' =>'Nama Provinsi',
            ],
            [
                'attribute' => 'NamaKabupatenAtauKota',
                'label' =>'Nama Kabupaten/Kota',
            ],
            'Keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
