<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Caregiver */

$this->title = 'Update Caregiver: ' . $model->cf;
$this->params['breadcrumbs'][] = ['label' => 'Caregiver', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cf, 'url' => ['view', 'email' => $model->cf]];
$this->params['breadcrumbs'][] = 'Update';

?>

<div class="caregiver-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
