<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap\BootstrapWidgetTrait;

//$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
div.Riga {
    width: 700;
    margin: 0 auto;
    text-align: center;
    border-style: ridge;
    border-width: thick;
    border-color: #28a745;
    margin-bottom: 2em;
    padding: 1em;
    background-color: white;
}

.img
{

}
</style>

<div class="pagina">
            <?php $form = ActiveForm::begin([]); ?>
            <div class="Riga">
                <p>  
                <p><b>Quante cucchiai uguali vedi nella figura?</b></p>
                <img class=img src="immagine1.png" alt="immagine1" width="600" height="600">
                <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
                <?= $form->field($model,'risposta1')->dropDownList($items,['Prompt'=>'Select'])?>   
                </p>   
                </div>  



            <div class="Riga">
                <p>  
                <p><b>Quante porte uguali vedi nella figura?</b></p>
                <img class=img src="immagine2.png" alt="immagine2" width="600" height="600">
                <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
                <?= $form->field($model,'risposta2')->dropDownList($items,['Prompt'=>'Select'])?>   
                </p>   
</div>



            <div class="Riga">
                <p>  
                <p><b>Quanti sacchi uguali vedi nella figura?</b></p>
                <img class=img src="immagine3.png" alt="immagine3" width="600" height="600">
                <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
                <?= $form->field($model,'risposta3')->dropDownList($items,['Prompt'=>'Select'])?>   
                </p>   
                </div>  



            <div class="Riga">
                <p>  
                <p><b>Quanti elefanti uguali vedi nella figura?</b></p>
                <img class=img src="immagine4.png" alt="immagine4" width="600" height="600">
                <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
                <?= $form->field($model,'risposta4')->dropDownList($items,['Prompt'=>'Select'])?>   
                </p>   
                </div>  



            <div class="Riga">
                <p>  
                <p><b>Quanti topolini uguali vedi nella figura?</b></p>
                <img class=img src="immagine5.png" alt="immagine5" width="600" height="600">
                <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
                <?= $form->field($model,'risposta5')->dropDownList($items,['Prompt'=>'Select'])?>   
                </p>   
                </div>  



            <div class="Riga">
                <p>  
                <p><b>Quanti dinosauri uguali vedi nella figura?</b></p>
                <img class=img src="immagine6.png" alt="immagine6" width="600" height="600">
                <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
                <?= $form->field($model,'risposta6')->dropDownList($items,['Prompt'=>'Select'])?>   
                </p>   
                </div>  



            <div class="Riga">
                <p>  
                <p><b>Quante zebre uguali vedi nella figura?</b></p>
                <img class=img src="immagine7.png" alt="immagine7" width="600" height="600">
                <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
                <?= $form->field($model,'risposta7')->dropDownList($items,['Prompt'=>'Select'])?>   
                </p>   
                </div>  



            <div class="Riga">
                <p>  
                <p><b>Quante lampadine uguali vedi nella figura?</b></p>
                <img class=img src="immagine8.png" alt="immagine8" width="600" height="600">
                <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
                <?= $form->field($model,'risposta8')->dropDownList($items,['Prompt'=>'Select'])?>   
                </p>   
                </div>  


        <p><b>Quanto ti ?? piaciuto il gioco? </b></p>
        <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
        <?= $form->field($model,'valutazione')->dropDownList($items,['Prompt'=>'Select'])?>
       
        </p> 
        </div>

                <div class="form-group">
                    <?= Html::submitButton('Fine', ['class' => 'btn btn-primary']) ?>   
                </div>
                <?php ActiveForm::end(); ?>
</div>
