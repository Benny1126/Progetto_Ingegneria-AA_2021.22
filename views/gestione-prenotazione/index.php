<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\prenotazioni\cercaPrenotazione */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prenotazioni';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prenotazione-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Calendario Prenotazioni', ['prenotazioni'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titolo',
            'descrizione',
            'data_prenotazione',
            'cf_c',

            // [ 
            //     'class' => ActionColumn::className(), 
            //     'template' => '{activate}', 
            //     'buttons' => [ 
            //        'activate' => function($url, $model) { 
            //           $id = $model -> id; 
            //           $cf_c = $model -> cf_c;
            //          {return Html::a($text='Accetta Prenotazione',$url= Url::toRoute(['/gestione-prenotazione/index', 'id' => $model -> id , 'cf_c'=> $model -> cf_c]) );} 
            //        } 
            //     ], 
            //  ],
             [ 
                'class' => ActionColumn::className(), 
                'template' => '{activate}', 
                'buttons' => [ 
                   'activate' => function($url, $model) { 
                      $id = $model -> id; 
                     {return Html::a($text='Rifiuta Prenotazione',$url= Url::toRoute(['/gestione-prenotazione/delete', 'id' => $model -> id]) );} 
                   } 
                ], 
             ],
        ],
    ]); ?>


</div>