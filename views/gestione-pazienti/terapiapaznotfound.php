<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;
?>
<div class="site-error">

    <p>
        Al paziente in questione non è stata ancora assegnata una terapia
        <?= Html::a('Indietro', ['/accessi/indexpaz'], ['class' => 'btn btn-primary']) ?>   
    </p>

    <style>
    .site-error{
        margin-top:30px;
    }
</style>
</div>
