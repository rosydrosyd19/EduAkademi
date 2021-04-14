<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datakabupatenataukota */

$this->title = 'Create Datakabupatenataukota';
$this->params['breadcrumbs'][] = ['label' => 'Datakabupatenataukotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datakabupatenataukota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'data' => $data,
    ]) ?>

</div>
