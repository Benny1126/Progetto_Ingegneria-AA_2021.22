<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\prenotazioni\prenotazione */

$this->title = 'Update Prenotazione: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Prenotaziones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prenotazione-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
