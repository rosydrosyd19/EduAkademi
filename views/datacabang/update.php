<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datacabang */

$this->title = 'Update Datacabang: ' . $model->IdCabang;
$this->params['breadcrumbs'][] = ['label' => 'Datacabangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdCabang, 'url' => ['view', 'id' => $model->IdCabang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datacabang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
