<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Datapesertadidik */

$this->title = $model->IdPesertaDidik;
$this->params['breadcrumbs'][] = ['label' => 'Datapesertadidiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="datapesertadidik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdPesertaDidik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdPesertaDidik], [
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
            'IdPesertaDidik',
            'IdKelas',
            'NamaSiswa',
            'Jenjang',
            'Kelas',
            'TempatLahir',
            'TanggalLahir',
            'NamaAyah',
            'NamaIbu',
            'NomerHpOrtu',
            'Alamat:ntext',
        ],
    ]) ?>

</div>
