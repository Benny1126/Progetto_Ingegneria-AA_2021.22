<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>


</style>
<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
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
<div class="site-premi">
<p>Scegli il premio da assegnare al paziente:</p>

<?= $form->field($model, 'premi_bronzo')-> textInput() ?>

<?= $form->field($model, 'premi_argento')-> textInput() ?>


<?= $form->field($model, 'premi_oro')-> textInput() ?>


<?= $form->field($model, 'premi_platino')-> textInput() ?>
<div class="form-group">
        <?= Html::submitButton('salva', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>

</div>
