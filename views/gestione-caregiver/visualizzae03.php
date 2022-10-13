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
                <p>  C’erano una volta tre porcellini, Timmy, Tommy e Gimmy che abitavano tutti ancora nella casa della mamma.

Un giorno la mamma disse loro – siete ormai grandicelli ragazzi miei, penso sia ora che prendiate ognuno di voi la vostra strada e costruiate ognuno la propria casetta!

I tre porcellini, seppur a malincuore, sapevano che era la cosa giusta da fare, erano diventati finalmente grandi e così si fecero forza e prepararono ognuno il proprio bagaglio.

Timmy fece un fagotto con tutti i suoi dolci e il ______ 
                <?php $items = ['binocolo'=>'binocolo','flauto'=>'flauto','quaderno'=>'quaderno']; ?>
                <?= $form->field($model,'risposta1')->dropDownList($items,['Prompt'=>'Select'])?>     
                che amava tanto suonare.
Tommy riempì di giocattoli una borsa assieme al suo caro violino.
Gimmy invece preparò la sua cassetta degli attrezzi con tutto ciò che gli sarebbe servito per costruire una solida casetta.

Così si prepararono, salutarono la mamma che augurò loro buona fortuna, e si incamminarono allegri e felici per il ________.


            
                <?php $items = ['lago'=>'lago','palazzo'=>'palazzo','sentiero'=>'sentiero']; ?>
                <?= $form->field($model,'risposta2')->dropDownList($items,['Prompt'=>'Select'])?>         
                – Fate attenzione al lupo cattivo! – si raccomandò tanto la mamma mentre li salutava con una lacrimuccia agli occhi.

I tre porcellini sorrisero, la salutarono ancora e proseguirono nel loro cammino.
Ma dalla collina, nascosto tra i cespugli, qualcuno stava osservando la scena, qualcuno a cui piacevano tanto i porcellini, soprattutto con contorno di patate arrosto… era il Lupo Cattivo!

Dopo un po’ che i tre porcellini camminavano allegramente Gimmy disse:
– Io mi fermerò qui per costruire la mia casetta, qui vicino c’è un ruscello e questi begli alberi mi faranno _____    
                <?php $items = ['ombra'=>'ombra','dormire'=>'dormire','mangiare'=>'mangiare']; ?>
                <?= $form->field($model,'risposta3')->dropDownList($items,['Prompt'=>'Select'])?>         
                nei mesi caldi.
– Va bene – risposero gli altri due – noi continuiamo a camminare!
Gimmy li salutò e cominciò a costruire la sua casetta.

Poco dopo Anche Tommy decise di fermarsi – io costruirò la mia casetta qui, dove ci sono tutti questi rami di legno – Va bene fratellino mio, io proseguo sul sentiero, a presto!

Timmy quindì salutò Tommy e continuò a camminare, finché non vide un bel covone di paglia dorata essiccata al sole.
– Potrei costruire la mia _______ 


                <?php $items = ['giacca'=>'giacca','casetta'=>'casetta','barca'=>'barca']; ?>
                <?= $form->field($model,'risposta4')->dropDownList($items,['Prompt'=>'Select'])?>        
                con quella paglia, ci metterei pochissimo così poi potrei subito andare a giocare! – disse, e così fece.

In quattro e quattr’otto, con qualche rametto qua e là, la casetta di paglia era pronta, così potè subito uscire in giardino e mettersi a suonare il suo amato flauto.

Anche Tommy ormai aveva ultimato la sua casetta. Non era molto robusta perché per fare presto e poter andare a divertirsi nei prati, aveva deciso di inchiodare le assi di legna in fretta e furia, giusto per arrivare al tetto e ripararsi dalla pioggia in caso di intemperie.
Non appena finì, prese il violino e cominciò a suonare. L’ultimo a finire il suo lavoro fu Gimmy, che lavorò fino a sera per costruirsi la sua robusta casetta di mattoni con una bella porta in legno e una grossa serratura.
Ci fece perfino un bel caminetto, per non patire il freddo nelle lunghe giornate invernali.
Solo allora si godette il meritato riposo.Il giorno seguente, il Lupo Cattivo, che aveva spiato i tre __________ 

                <?php $items = ['porcellini'=>'porcellini','anatroccoli'=>'anatroccoli','gatti'=>'gatti']; ?>
                <?= $form->field($model,'risposta5')->dropDownList($items,['Prompt'=>'Select'])?>           
                per tutto il giorno precedente, si presentò alla casetta di paglia di Timmy e disse con la sua vociona:
– Porcellino, porcellino, posso entrare un momentino?

Ma Timmy, che si ricordava bene delle parole della mamma guardò fuori dalla finestra e disse:
– Non sono mica matto! Tu sei il Lupo Cattivo! – e chiuse anche la finestra pensando così di essere al sicuro.

Ma il Lupo Cattivo si mise a ridere e preso un gran respiro si mise a soffiare così forte sulla casetta di Timmy, che la paglia volò via, e della casetta non rimase nulla…
Timmy corse via più forte che poteva e raggiunse Tommy nella sua casetta di legno.

– Il Lupo Cattivo con un gran soffio ha fatto volar via la mia casetta!
– Non ti preoccupare – rispose Tommy – puoi rimanere nella mia casetta di legno.

Ma poco dopo il Lupo bussò anche lì:
– Porcellino, porcellino, posso entrare un momentino?
I due capirono subito che si trattava del Lupo _______


                <?php $items = ['buono'=>'buono','dolce'=>'dolce','cattivo'=>'cattivo']; ?>
                <?= $form->field($model,'risposta6')->dropDownList($items,['Prompt'=>'Select'])?>        

 e risposero in coro:
– Non siamo mica matti! Tu sei il Lupo Cattivo!

Ma il Lupo Cattivo si mise a ridere e, preso un gran respiro, si mise a soffiare così forte che anche la casetta di Tommy, con le assi di legno inchiodate in tutta velocità, volò via…

Timmy e Tommy corsero via a perdifiato e andarono da Gimmy, che li accolse subito.
– Tranquilli fratellini miei, questa è una solida casa di mattoni, e il Lupo non riuscirà a spazzarla via.

Infatti poco dopo arrivò il Lupo Cattivo.
– Porcellino, porcellino, posso entrare un momentino?
– Non siamo mica matti! – risposero i tre in coro.

Ma il Lupo Cattivo si mise a ridere e, preso un gran respiro, si mise a ________ 
 
                <?php $items = ['dormire'=>'dormire','soffiare'=>'soffiare','mangiare'=>'mangiare']; ?>
                <?= $form->field($model,'risposta7')->dropDownList($items,['Prompt'=>'Select'])?>       
                forte, ma così forte che… non successe nulla.
La casetta di mattoni era ancora lì.

Il lupo allora provò e riprovò, ma niente, neanche uno scricchiolio.
– Entrerò dal camino! – disse, e con un balzo era già sul tetto.
Gimmy capì cosa aveva in mente di fare il Lupo e quindi preparò un gran _________ 

                <?php $items = ['pentolone'=>'pentolone','pallone'=>'pallone','tesoro'=>'tesoro']; ?>
                <?= $form->field($model,'risposta8')->dropDownList($items,['Prompt'=>'Select'])?>
                di acqua bollente sul fuoco del camino, così quando il Lupo Cattivo si calò giù dal camino finì dritto in pentola!

Il Lupo gridò dal dolore e scappò via su per la canna fumaria del camino con la coda tutta scottata!

Da quel giorno nessuno dei 3 porcellini vide mai più il Lupo Cattivo. Anche Timmy e Tommy decisero di rimboccarsi le maniche e costruire ognuno una bella casa di mattoni proprio accanto a quella di Gimmy, così tutti i giorni potevano suonare e ballare:




        <p><b>Quanto ti è piaciuto il gioco? </b></p>
        <?php $items = ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10]; ?>
        <?= $form->field($model,'valutazione')->dropDownList($items,['Prompt'=>'Select'])?>
       
        </p> </div>
        </div>

                <div class="form-group">
                    <?= Html::submitButton('Fine', ['class' => 'btn btn-primary']) ?>   
                </div>
                <?php ActiveForm::end(); ?>
</div>
