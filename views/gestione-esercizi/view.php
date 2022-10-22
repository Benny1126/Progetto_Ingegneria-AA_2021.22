<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Esercizio */

$this->title = $model->id_esercizio;
$this->params['breadcrumbs'][] = ['label' => 'Esercizi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="esercizio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('aggiorna', ['update', 'id_esercizio' => $model->id_esercizio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('elimina', ['delete', 'id_esercizio' => $model->id_esercizio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Indietro', ['index', 'id_esercizio' => $model->id_esercizio], ['class' => 'btn btn-primary']) ?>    
</p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_esercizio',
            'nome',
        ],
    ]) ?>

</div>
