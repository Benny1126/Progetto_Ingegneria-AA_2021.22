<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewUser */
/* @var $form ActiveForm */
$this->title = 'Registrati';
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
        <?= $form->field($model, 'email')-> textInput() ?>
        <?= $form->field($model, 'pass')->passwordInput() ?>

        <?php $items = ['1'=>'Paziente','2'=>'caregiver','3'=>'logopedista']; ?>
        <?= $form->field($model,'ruolo')->dropDownList($items,['Prompt'=>'Select'])?>


        <!-- <label for="who">Chi vuoi registrare?</label>
        <select name="selezione" id="id_selezione">
        <option value="1" selected="selected">Paziente</option>
        <option value="2">Caregiver</option>
        </select> -->

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>