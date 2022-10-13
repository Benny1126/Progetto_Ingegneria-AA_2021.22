<style>
    .site-index {
    text-align: -webkit-center;
}

.jumbotron {
    width: fit-content;
    padding: 4rem 2rem;
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2;
    padding-top: 0.25em;
}
</style>

<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<style>


</style>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
    <img class="img-home" src="https://cdn-icons-png.flaticon.com/512/1430/1430453.png"></img>
    <?php
        if(($data = idate("H")) < 6)
        { ?>
            <h3 class="display-4">Buonasera Paziente!</h3>
    <?php  } ?>

    <?php
        if(($data = idate("H")) >= 6 && $data < 12)
        { ?>
            <h3 class="display-4">Buongiorno Paziente!</h3>
    <?php  } ?>

    <?php
        if(($data = idate("H")) >= 12 && $data < 19)
        { ?>
            <h3 class="display-4">Buon pomeriggio Paziente!</h3>
    <?php  } ?>

    <?php
        if(($data = idate("H")) >= 19 && $data <= 24)
        { ?>
            <h3 class="display-4">Buonasera Paziente!</h3>
    <?php  } ?>

        <!-- <h3 class="display-4">Benvenuto Paziente!</h3> -->

    </div>

    <div class="body-content">


</div>
</div>
