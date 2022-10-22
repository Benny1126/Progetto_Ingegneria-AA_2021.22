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
        <?= Html::a('Gestione Visite', ['index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= yii2fullcalendar\yii2fullcalendar::widget(array(
        'events'=>$events,
    ));
    

?>



</div>
