<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BukutamuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buku Tamu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukutamu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bukutamu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ID',
            'NamaOrangTua',
            'NoHP',
            'NamaSiswa',
            // 'NoHPSiswa',
            //'Alamat:ntext',
            'AsalSekolah',
            'Kelas',
            //'Keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
