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
  border-style: inset; 
  width:700; 
}

p{
    text-align: center;
}


</style>

<div class="pagina">
<p><b>IN QUESTA PAGINA LE MODIFICHE NON SARANNO APPORTATE</b></p>
            <?php $form = ActiveForm::begin([]); ?>
            <div class="Riga">
                <p>
                    
                <img src="https://png.pngtree.com/png-vector/20191028/ourlarge/pngtree-maracas-icon-cartoon-style-png-image_1889975.jpg" alt="maracas" width="300" height="300">
                <img src="https://365psd.com/images/listing/23b/violin-vector-13510.jpg" alt="violino" width="300" height="300">
                <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/3767245-tamburo-con-bacchette-blu-rgb-icona-colore-strumento-musicale-brasiliano-carnevale-samba-festive-drum-parade-movimento-musicale-vacanza-nazionale-isolato-illustrazione-vettoriale.jpg" alt="tamburo" width="300" height="300">
                
                </p>
            
                <p>
                    <audio controls>
                    <source src="violino.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                </p>
                <?= $form->field($model, 'risposta1')->radioList( ['maracas'=>'maracas', 'violino' => 'violino', 'tamburo'=> 'tamburo'] );?>         
            </div>
            
            <div class="Riga">
                <p>
                    
                <img src="https://365psd.com/images/listing/23b/violin-vector-13510.jpg" alt="violino" width="300" height="300">
                <img src="https://img.freepik.com/premium-vector/electric-guitar-vector-icon-illustration_138676-378.jpg?w=2000" alt="chitarra" width="300" height="300">
                <img src="https://png.pngtree.com/png-vector/20191028/ourlarge/pngtree-maracas-icon-cartoon-style-png-image_1889975.jpg" alt="maracas" width="300" height="300">
                
                </p>
            
                <p>
                    <audio controls>
                    <source src="maracas.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                </p>
                <?= $form->field($model, 'risposta2')->radioList( ['violino'=>'violino', 'chitarra' => 'chitarra', 'maracas'=> 'maracas'] );?>         
            </div>

            <div class="Riga">
                <p>
                    
                <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/3767245-tamburo-con-bacchette-blu-rgb-icona-colore-strumento-musicale-brasiliano-carnevale-samba-festive-drum-parade-movimento-musicale-vacanza-nazionale-isolato-illustrazione-vettoriale.jpg" alt="tamburo" width="300" height="300">
                <img src="https://png.pngtree.com/png-vector/20191021/ourlarge/pngtree-flute-icon-black-monochrome-style-png-image_1831393.jpg" alt="flauto" width="300" height="300">
                <img src=https://static.vecteezy.com/ti/vettori-gratis/p3/2215990-sassofono-icona-strumento-musicale-per-jazz-dorato-strumenti-musicali-concetto-musica-classica-concerto-jazz-performance-flat-cartoon-vector-illustration-isolated-on-white-background-vettoriale.jpg" alt="sassofono" width="300" height="300">
                
                </p>
            
                <p>
                    <audio controls>
                    <source src="tamburo.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                </p>
                <?= $form->field($model, 'risposta3')->radioList( ['tamburo'=>'tamburo', 'flauto' => 'flauto', 'sassofono'=> 'sassofono'] );?>         
            </div> 

            <div class="Riga">
                <p>
                    
                <img src="https://img.freepik.com/premium-vector/colorful-xylophone-with-sticks_175250-257.jpg" alt="xilofono" width="300" height="300">
                <img src="https://img.freepik.com/premium-vector/electric-guitar-vector-icon-illustration_138676-378.jpg?w=2000" alt="chitarra" width="300" height="300">
                <img src="https://png.pngtree.com/png-vector/20191028/ourlarge/pngtree-maracas-icon-cartoon-style-png-image_1889975.jpg" alt="maracas" width="300" height="300">
                
                </p>
            
                <p>
                    <audio controls>
                    <source src="chitarra.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                </p>
                <?= $form->field($model, 'risposta4')->radioList( ['xilofono'=>'xilofono', 'chitarra' => 'chitarra', 'maracas'=> 'maracas'] );?>         
            </div> 

            <div class="Riga">
                <p>
                    
                <img src="https://365psd.com/images/listing/23b/violin-vector-13510.jpg" alt="violino" width="300" height="300">
                <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/3767245-tamburo-con-bacchette-blu-rgb-icona-colore-strumento-musicale-brasiliano-carnevale-samba-festive-drum-parade-movimento-musicale-vacanza-nazionale-isolato-illustrazione-vettoriale.jpg" alt="tamburo" width="300" height="300">
                <img src="https://us.123rf.com/450wm/angelp/angelp2008/angelp200800294/153915658-icona-della-fisarmonica-design-a-colori-piatti-illustrazione-vettoriale-.jpg?ver=6" alt="fisarmonica" width="300" height="300">
                
                </p>
            
                <p>
                    <audio controls>
                    <source src="fisarmonica.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                </p>
                <?= $form->field($model, 'risposta5')->radioList( ['violino'=>'violino', 'tamburo' => 'tamburo', 'fisarmonica'=> 'fisarmonica'] );?>         
            </div> 

            <div class="Riga">
                <p>
                    
                <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/2215990-sassofono-icona-strumento-musicale-per-jazz-dorato-strumenti-musicali-concetto-musica-classica-concerto-jazz-performance-flat-cartoon-vector-illustration-isolated-on-white-background-vettoriale.jpg" alt="sassofono" width="300" height="300">
                <img src="https://png.pngtree.com/png-vector/20191028/ourlarge/pngtree-maracas-icon-cartoon-style-png-image_1889975.jpg" alt="maracas" width="300" height="300">
                <img src="https://img.freepik.com/premium-vector/colorful-xylophone-with-sticks_175250-257.jpg" alt="xilofono" width="300" height="300">
                
                </p>
            
                <p>
                    <audio controls>
                    <source src="xilofono.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                </p>
                <?= $form->field($model, 'risposta6')->radioList( ['sassofono'=>'sassofono', 'maracas' => 'maracas', 'xilofono'=> 'xilofono'] );?>         
            </div>
            
            <div class="Riga">
                <p>
                    
                <img src="https://img.freepik.com/premium-vector/colorful-xylophone-with-sticks_175250-257.jpg" alt="xilofono" width="300" height="300">
                <img src="https://png.pngtree.com/png-vector/20191021/ourlarge/pngtree-flute-icon-black-monochrome-style-png-image_1831393.jpg" alt="flauto" width="300" height="300">
                <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/3767245-tamburo-con-bacchette-blu-rgb-icona-colore-strumento-musicale-brasiliano-carnevale-samba-festive-drum-parade-movimento-musicale-vacanza-nazionale-isolato-illustrazione-vettoriale.jpg" alt="tamburo" width="300" height="300">
                
                </p>
            
                <p>
                    <audio controls>
                    <source src="flauto.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                </p>
                <?= $form->field($model, 'risposta7')->radioList( ['xilofono'=>'xilofono', 'flauto' => 'flauto', 'tamburo'=> 'tamburo'] );?>         
            </div> 

            <div class="Riga">
                <p>
                    
                <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/2215990-sassofono-icona-strumento-musicale-per-jazz-dorato-strumenti-musicali-concetto-musica-classica-concerto-jazz-performance-flat-cartoon-vector-illustration-isolated-on-white-background-vettoriale.jpg" alt="sassofono" width="300" height="300">
                <img src="https://img.freepik.com/premium-vector/electric-guitar-vector-icon-illustration_138676-378.jpg?w=2000" alt="chitarra" width="300" height="300">
                <img src="https://png.pngtree.com/png-vector/20191021/ourlarge/pngtree-flute-icon-black-monochrome-style-png-image_1831393.jpg" alt="flauto" width="300" height="300">
                
                </p>
            
                <p>
                    <audio controls>
                    <source src="sassofono.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                </p>
                <?= $form->field($model, 'risposta8')->radioList( ['sassofono'=>'sassofono', 'chitarra' => 'chitarra', 'flauto'=> 'flauto'] );?>        
                   </div> 

                   <p><b>Quanto ti è piaciuto il gioco? </b></p>
        <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
        <?= $form->field($model,'valutazione')->dropDownList($items,['Prompt'=>'Select'])?>

        </div>

                <div class="form-group">
                    <?= Html::submitButton('Fine', ['class' => 'btn btn-primary']) ?>   
                </div>
                <?php ActiveForm::end(); ?>
</div>
