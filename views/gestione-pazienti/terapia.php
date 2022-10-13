<?php


use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Terapia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gestione-pazienti-terapia">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id_terapia',
                'nome',
                'cf_paziente',    

            ],
        ]) ?>
        <p>
            <?= Html::a('Clicca qui per iniziare gli esercizi', ['listaesercizi', 'id_terapia' => $model->id_terapia], ['class' => 'btn btn-primary']) ?>
        </p>

</div>
