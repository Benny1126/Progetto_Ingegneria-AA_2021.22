<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Terapia */

$this->title = 'aggiorna Terapia: ' . $model->id_terapia;
$this->params['breadcrumbs'][] = ['label' => 'Terapia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_terapia, 'url' => ['view', 'id_terapia' => $model->id_terapia]];
$this->params['breadcrumbs'][] = 'aggiorna';
?>
<div class="terapia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
