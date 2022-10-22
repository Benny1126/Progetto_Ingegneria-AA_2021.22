<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

//$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
div.Riga {
    margin: 0 auto;
    text-align: center;
    border-style: ridge;
    border-width: thick;
    border-color: #28a745;
    margin-bottom: 2em;
    padding: 1em;
    background-color: white; 
}

p{
    text-align: center;
}

h4
{
    text-align: center;
}



</style>

<div class="full-withradius border">
<h4>Ripeti ad alta voce il nome degli animali</h4>
    <div class="Riga">
        <p>
            <img src="https://acegif.com/wp-content/gifs/black-cat-40.gif" alt="Gatto" width="300" height="300">
            <img src="https://cdn.pixabay.com/photo/2018/12/13/23/54/hedgehog-3874008_1280.png" alt="Riccio" width="300" height="300">
            <img src="https://media.baamboozle.com/uploads/images/442557/1630414466_145273.gif" alt="Ippopotamo" width="300" height="300">
            
        </p>
        <p>
            <audio controls>
            <source src="gatto.mp3" type="audio/mp3">
            Your browser does not support the audio element.
            </audio>
            <audio controls>
            <source src="riccio.ogg" type="audio/ogg">
            Your browser does not support the audio element.
            </audio>
            <audio controls>
            <source src="ippopotamo.ogg" type="audio/ogg">
            Your browser does not support the audio element.
            </audio>
        </p>
    </div>

    <div class="Riga">
    <p>
        <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/3513781-tigre-cartone-animato-illustrazioni-baby-tiger-vettoriale.jpg" alt="Tigre" width="300" height="300">
        <img src="https://cdn.dribbble.com/users/488772/screenshots/3036411/giraffe.gif" alt="Giraffa" width="300" height="300">
        <img src="https://i.pinimg.com/originals/af/da/8d/afda8d223cf088187cf671d0fae4668c.png" alt="Pinguino" width="300" height="300">
    </p>
    <p>
    <audio controls>
            <source src="tigre.ogg" type="audio/ogg">
            Your browser does not support the audio element.
            </audio>
    <audio controls>
            <source src="giraffa.ogg" type="audio/ogg">
            Your browser does not support the audio element.
            </audio>
    <audio controls>
            <source src="pinguino.ogg" type="audio/ogg">
            Your browser does not support the audio element.
            </audio>
    </p>

    </div>

    <div class="Riga">
    <p>
        <img src="https://usercontent.one/wp/www.kibble.it/wp-content/uploads/2021/03/Copia-di-Progetto-senza-titolo.gif" alt="Cane" width="300" height="300">
        <img src="https://img.freepik.com/premium-vector/cute-little-monkey-hanging-liana-cartoon_159446-649.jpg?w=2000" alt="Scimpanze" width="300" height="300">
        <img src="https://www.rossellabianchi.com/wp-content/uploads/2021/10/60421-fish-move-2.gif" alt="Pesce" width="300" height="300">
    </p>
    <p>
    <audio controls>
            <source src="cane.ogg" type="audio/ogg">
            Your browser does not support the audio element.
            </audio>
    <audio controls>
            <source src="scimpanze.ogg" type="audio/ogg">
            Your browser does not support the audio element.
            </audio>
    <audio controls>
            <source src="pesce.ogg" type="audio/ogg">
            Your browser does not support the audio element.
            </audio>
    </p>

    </div>
    <p>
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
        <p><b>Quanto ti è piaciuto il gioco? </b></p>
    <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
        <?= $form->field($model,'valutazione')->dropDownList($items,['Prompt'=>'Select'])?>
        <div class="form-group">
            <?= Html::submitButton('Fine', ['class' => 'btn btn-primary']) ?>   
        </div>
    <?php ActiveForm::end(); ?>

</div>


</div>


<style>



</style>
