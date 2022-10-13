<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pazienti */

$this->title = 'Aggiungi un Paziente';
$this->params['breadcrumbs'][] = ['label' => 'Pazienti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Aggiungi un Paziente">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
