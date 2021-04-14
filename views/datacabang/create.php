<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datacabang */

$this->title = 'Tambah Data Cabang';
$this->params['breadcrumbs'][] = ['label' => 'Data Cabang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datacabang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'data' => $data,
        // 'data2' => $data2,
    ]) ?>

</div>
