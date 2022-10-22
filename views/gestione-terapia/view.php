<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Terapia */

$this->title = $model->id_terapia;
$this->params['breadcrumbs'][] = ['label' => 'Terapia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="terapia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('aggiorna', ['update', 'id_terapia' => $model->id_terapia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('elimina', ['delete', 'id_terapia' => $model->id_terapia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_terapia',
            'nome',
            'cf_paziente',
        ],
    ]) ?>

</div>
