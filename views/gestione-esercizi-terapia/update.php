<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EsercizioTerapia */

$this->title = 'Update Esercizio Terapia: ' . $model->codice_esercizio;
$this->params['breadcrumbs'][] = ['label' => 'Esercizio Terapia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codice_esercizio, 'url' => ['view', 'codice_esercizio' => $model->codice_esercizio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="esercizio-terapia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
