<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bukutamu */

$this->title = 'Update Buku Tamu: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Bukutamus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bukutamu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
