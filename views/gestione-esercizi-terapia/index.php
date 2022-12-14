<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\cercaET */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Esercizi assegnati alle Terapie';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="esercizio-terapia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Assegna un esercizio ad una terapia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codice_esercizio',
            'codice_terapia',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\eserciziTerapia\EsercizioTerapia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'codice_esercizio' => $model->codice_esercizio]);
                 }
            ],
        ],
    ]); ?>


</div>
