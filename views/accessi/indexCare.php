<style>
    .site-icare {
    text-align: -webkit-center;
}

.jumbotron {
    width: fit-content;
    padding: 4rem 2rem;
}
</style>

<?php

/** @var yii\web\View $this */
use yii\bootstrap4\Html;
$this->title = 'LogopediaSystem';
?>
<div class="site-icare">

<div class="jumbotron text-center bg-transparent">
    <img class="img-home" src="https://cdn-icons-png.flaticon.com/512/1141/1141111.png"></img>
    <?php
        if(($data = idate("H")) < 6)
        { ?>
            <h3 class="display-4">Buonasera Caregiver!</h3>
    <?php  } ?>

    <?php
        if(($data = idate("H")) >= 6 && $data < 12)
        { ?>
            <h3 class="display-4">Buongiorno Caregiver!</h3>
    <?php  } ?>

    <?php
        if(($data = idate("H")) >= 12 && $data < 19)
        { ?>
            <h3 class="display-4">Buon pomeriggio Caregiver!</h3>
    <?php  } ?>

    <?php
        if(($data = idate("H")) >= 19 && $data <= 24)
        { ?>
            <h3 class="display-4">Buonasera Caregiver!</h3>
    <?php  } ?>

        <!-- <h3 class="display-4">Benvenuto Paziente!</h3> -->

    </div>

</div>
