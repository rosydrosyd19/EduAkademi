<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datapesertadidik */

$this->title = 'Create Datapesertadidik';
$this->params['breadcrumbs'][] = ['label' => 'Datapesertadidiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapesertadidik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
