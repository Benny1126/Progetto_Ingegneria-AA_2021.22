<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<div class="group">
    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
            <?= Html::submitButton('Invio', ['class' => 'btn btn-primary']) ?>
            
        </div>
        </div>
<?php ActiveForm::end() ?>

<style>
    .group{
        margin-top:30px;
    }
</style>
