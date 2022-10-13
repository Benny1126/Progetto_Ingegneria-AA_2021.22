<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\cercaPazienti */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pazienti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pazienti-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email:email',
            'nome',
            'cognome',
            'cf',
            'diagnosi',
            //'ruolo',
            //'pass',
            //'authKey',
            //'accessToken',
            //'cf_care',
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, Pazienti $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'cf' => $model->cf]);
            //      }
            // ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Paziente\Pazienti $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'cf' => $model->cf]);
                 }
            ],
            [ 
                'class' => ActionColumn::className(), 
                'template' => '{activate}', 
                'buttons' => [ 
                   'activate' => function($url, $model) { 
                      $cf = $model -> cf; 
                     {return Html::a($text='Crea Terapia',$url= Url::toRoute(['/gestione-terapia/terapia', 'cf' => $model -> cf]) );} 
                   } 
                ], 
             ],
             [ 
                'class' => ActionColumn::className(), 
                'template' => '{activate}', 
                'buttons' => [ 
                   'activate' => function($url, $model) { 
                      $cf = $model -> cf; 
                     {return Html::a($text='Sezione Diagnosi',$url= Url::toRoute(['/gestione-pazienti/diagnosi', 'cf' => $model -> cf]) );} 
                   } 
                ], 
             ],
             [ 
               'class' => ActionColumn::className(), 
               'template' => '{activate}', 
               'buttons' => [ 
                  'activate' => function($url, $model) { 
                     $cf = $model -> cf; 
                    {return Html::a($text='Assegna Premi',$url= Url::toRoute(['/gestione-pazienti/premi', 'cf' => $model -> cf]) );} 
                  } 
               ], 
            ],
        ],
    ]); ?>


</div>
