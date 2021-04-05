<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datakelas */

$this->title = 'Update Datakelas: ' . $model->IdKelas;
$this->params['breadcrumbs'][] = ['label' => 'Datakelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdKelas, 'url' => ['view', 'id' => $model->IdKelas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datakelas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
