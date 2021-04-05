<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatapesertadidikSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datapesertadidiks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapesertadidik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Datapesertadidik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdPesertaDidik',
            'IdKelas',
            'NamaSiswa',
            'Jenjang',
            'Kelas',
            //'TempatLahir',
            //'TanggalLahir',
            //'NamaAyah',
            //'NamaIbu',
            //'NomerHpOrtu',
            //'Alamat:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
