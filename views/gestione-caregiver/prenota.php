<style>
    button.btn.btn-success
    {
    width: 85px;
    height: 45px;
    border: none;
    outline: none;
    background: #28a745;
    color: #fff;
    font-size: 22px;
    border-radius: 40px;
    text-align: center;
    box-shadow: 0 6px 20px -5px rgb(0 0 0 / 40%);
    position: relative;
    overflow: hidden;
    cursor: pointer;
    }
</style>

<?php


use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model app\models\prenotazioni\prenotazione */
/* @var $form yii\widgets\ActiveForm */
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="prenotazione-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'titolo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descrizione')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_prenotazione')->textInput(['placeholder' => "aaaa/mm/gg"]) ?>

    <?= $form->field($model, 'cf_c')->textInput(['id'=>'cf','readonly'=> true])?>

    <div class="form-group">
        <?= Html::submitButton('salva', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
