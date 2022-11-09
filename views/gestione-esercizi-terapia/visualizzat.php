<?php


use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'visualizza terapia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gestione-esercizi-terapia">

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
            <?= Html::a('Clicca qui visualizzare gli esercizi svolti', ['listaesercizisvolti', 'id_terapia' => $model->id_terapia, 'cf_paziente' => $model -> cf_paziente,], ['class' => 'btn btn-primary']) ?>
        </p>

</div>
