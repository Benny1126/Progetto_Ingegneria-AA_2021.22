<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\cercaT */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Terapia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terapia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Assegna una terapia ad un paziente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_terapia',
            'nome',
            'cf_paziente',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Terapia\Terapia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_terapia' => $model->id_terapia]);
                 }
            ],

            [ 
                'class' => ActionColumn::className(), 
                'template' => '{activate}', 
                'buttons' => [ 
                   'activate' => function($url, $model) { 
                      $id_terapia = $model -> id_terapia; 
                     {return Html::a($text='Aggiungi Esercizio',$url= Url::toRoute(['/gestione-esercizi-terapia/esercizio', 'id_terapia' => $model -> id_terapia]) );} 
                   } 
                ], 
             ],

             [ 
                'class' => ActionColumn::className(), 
                'template' => '{activate}', 
                'buttons' => [ 
                   'activate' => function($url, $model) { 
                      $id_terapia = $model -> id_terapia; 
                     {return Html::a($text='monitora Terapia',$url= Url::toRoute(['/gestione-esercizi-terapia/visualizzat', 'id_terapia' => $model -> id_terapia, 'cf_paziente' => $model -> cf_paziente]) );} 
                   } 
                ], 
             ],
            
        ],
    ]); ?>


</div>
