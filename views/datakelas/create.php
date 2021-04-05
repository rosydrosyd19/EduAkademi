<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datakelas */

$this->title = 'Create Datakelas';
$this->params['breadcrumbs'][] = ['label' => 'Datakelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datakelas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
