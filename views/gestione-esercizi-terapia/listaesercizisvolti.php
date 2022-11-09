<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\cercaPazienti */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista esercizi della terapia' ;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pazienti-lista-esercizi">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codice_esercizio',
            'valutazione',

            [ 
                'class' => ActionColumn::className(), 
                'template' => '{activate}', 
                'buttons' => [ 
                   'activate' => function($url, $model) { 
                     {
                        if(($model -> codice_esercizio) == 'E01'){
                        return Html::a($text='Visualizza Esercizio',$url= Url::toRoute(['/gestione-esercizi-terapia/e01','codice_esercizio'=>$model->codice_esercizio]) );
                        }
                        else if (($model -> codice_esercizio) == 'E02')
                        {
                            return Html::a($text='Visualizza Esercizio',$url= Url::toRoute(['/gestione-esercizi-terapia/e02','codice_esercizio'=>$model->codice_esercizio]) );                            
                        }
                        else if (($model -> codice_esercizio) == 'E03')
                        {
                            return Html::a($text='Visualizza Esercizio',$url= Url::toRoute(['/gestione-esercizi-terapia/e03','codice_esercizio'=>$model->codice_esercizio]) );                            
                        }
                        else if (($model -> codice_esercizio) == 'E04')
                        {
                            return Html::a($text='Visualizza Esercizio',$url= Url::toRoute(['/gestione-esercizi-terapia/e04','codice_esercizio'=>$model->codice_esercizio]) );                            
                        }
                        else
                        {
                        return Html::a($text='Visualizza Esercizio',$url= Url::toRoute(['index']) );   
                        }
                     }
                    } 
                ], 
             ],
        ],
    ]); ?>


</div>