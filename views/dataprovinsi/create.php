<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dataprovinsi */

$this->title = 'Create Dataprovinsi';
$this->params['breadcrumbs'][] = ['label' => 'Dataprovinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataprovinsi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
