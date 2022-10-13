<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;


$this->title = 'Registra il paziente';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-register">
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

        <?= $form->field($model, 'username')-> textInput() ?>
        <?= $form->field($model, 'nome')-> textInput() ?>
        <?= $form->field($model, 'cognome')-> textInput() ?>
        <?= $form->field($model, 'cf')-> textInput() ?>
        <?= $form->field($model, 'pass')->passwordInput() ?>
 
        

        <div class="form-group">
            <?= Html::submitButton('Invio', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>