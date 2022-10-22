<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\prenotazioni\prenotazione */

$this->title = 'Create Prenotazione';
$this->params['breadcrumbs'][] = ['label' => 'Prenotaziones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prenotazione-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
