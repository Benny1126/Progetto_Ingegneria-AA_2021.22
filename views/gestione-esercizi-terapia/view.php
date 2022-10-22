<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EsercizioTerapia */

$this->title = $model->codice_esercizio;
$this->params['breadcrumbs'][] = ['label' => 'Esercizio Terapia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="esercizio-terapia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Aggiorna', ['update', 'codice_esercizio' => $model->codice_esercizio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Elimina', ['delete', 'codice_esercizio' => $model->codice_esercizio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Indietro', ['/gestione-terapia/index', 'id_terapia' => $model->codice_terapia], ['class' => 'btn btn-primary']) ?>    
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codice_esercizio',
            'codice_terapia',
        ],
    ]) ?>

</div>
