<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datapesertadidik */

$this->title = 'Update Datapesertadidik: ' . $model->IdPesertaDidik;
$this->params['breadcrumbs'][] = ['label' => 'Datapesertadidiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdPesertaDidik, 'url' => ['view', 'id' => $model->IdPesertaDidik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datapesertadidik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
