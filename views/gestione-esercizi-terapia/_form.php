<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EsercizioTerapia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="esercizio-terapia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codice_esercizio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codice_terapia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('salva', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
