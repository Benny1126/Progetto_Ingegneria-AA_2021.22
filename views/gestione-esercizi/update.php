<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Esercizio */

$this->title = 'Update Esercizio: ' . $model->id_esercizio;
$this->params['breadcrumbs'][] = ['label' => 'Esercizi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_esercizio, 'url' => ['view', 'id_esercizio' => $model->id_esercizio]];
$this->params['breadcrumbs'][] = 'aggiorna';
?>
<div class="esercizio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
