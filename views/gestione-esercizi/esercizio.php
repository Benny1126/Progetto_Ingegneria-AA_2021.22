<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;


$this->title = 'crea un Esercizio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-esercizio">
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

     <?= $form->field($model, 'id_esercizio')->textInput()?>
     <?= $form->field($model, 'nome')-> textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            
        </div>
    <?php ActiveForm::end(); ?>

</div>