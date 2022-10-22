<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EsercizioTerapia */

$this->title = 'Create Esercizio Terapia';
$this->params['breadcrumbs'][] = ['label' => 'Esercizio Terapia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="esercizio-terapia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
