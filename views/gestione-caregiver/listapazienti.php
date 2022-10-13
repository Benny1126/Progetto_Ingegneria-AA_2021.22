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
<div class="lista-pazienti">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cf',
            'nome',
            'cognome',

            [ 
                'class' => ActionColumn::className(), 
                'template' => '{activate}', 
                'buttons' => [ 
                   'activate' => function($url, $model) { 
                     {

                        return Html::a($text='Vai alla Terapia',$url= Url::toRoute(['terapiapaziente', 'cf' => $model->cf]) );   
                     }
                    } 
                ], 
             ],
        ],
    ]); ?>


</div>