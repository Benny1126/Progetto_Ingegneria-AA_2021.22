<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pazienti */

$this->title = $model->cf;
$this->params['breadcrumbs'][] = ['label' => 'Pazienti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pazienti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Aggiorna', ['update', 'cf' => $model->cf], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('elimina', ['delete', 'cf' => $model->cf], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
         <?= Html::a('Indietro', ['index', 'cf' => $model->cf], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'email:email',
            'nome',
            'cognome',
            'cf',
            'diagnosi',
            'ruolo',
            'pass',
            'authKey',
            'accessToken',
            'cf_care',
        ],
    ]) ?>

</div>
