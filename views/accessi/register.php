<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewUser */
/* @var $form ActiveForm */
$this->title = 'Registra';
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
        <?= $form->field($model, 'cf')-> textInput() ?>
        <?= $form->field($model, 'nome')-> textInput() ?>
        <?= $form->field($model, 'cognome')-> textInput() ?>
        <?= $form->field($model, 'email')-> textInput() ?>
        <?= $form->field($model, 'pass')->passwordInput() ?>

        <?php $items = ['3'=>'logopedista', '2'=>'caregiver']; ?>
        <?= $form->field($model,'ruolo')->dropDownList($items,['Prompt'=>'Select'])?>

        <div class="form-group">
            <?= Html::submitButton('Invio', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>