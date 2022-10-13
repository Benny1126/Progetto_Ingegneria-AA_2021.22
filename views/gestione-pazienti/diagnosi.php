<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;



$this->title = 'Inserisci una diagnosi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-esercizi-terapia">
<h1><?php echo Html::encode($this->title)?></h1>
    <?php $form = ActiveForm::begin([
        
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],




    ]); ?>

     <?= $form->field($model, 'diagnosi')-> textarea(['rows' => 16]) ?>


        <div class="form-group">
            <?= Html::submitButton('invia', ['class' => 'btn btn-primary']) ?>
            
        </div>
        <div class="form-group">
         
         <?= Html::a($text='Indietro',$url=(['/gestione-pazienti/index']) ); ?>
         
         
     </div>
    <?php ActiveForm::end(); ?>

</div>
