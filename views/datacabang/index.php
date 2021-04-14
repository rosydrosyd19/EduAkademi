<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatacabangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Cabang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datacabang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Cabang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'IdCabang',
            [
                'attribute' => 'IdKabupatenAtauKota',
                'value' => 'idKabupatenAtauKota.NamaKabupatenAtauKota',
                'label' =>'Nama Kabupaten/Kota',
            ],
            
            'NamaCabang',
            'Keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
