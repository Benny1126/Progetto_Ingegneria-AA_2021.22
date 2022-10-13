<style>  
body {
  background-image: url('bg.png');
  background-size: 1920px 1080px;
  background-position: 40% 40%;
  background-repeat: no-repeat;
  background-color: rgba(229, 229, 229, 0.3);
  background-attachment: fixed;
  background-position: center bottom;
} 

</style>

</style>
<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
      
      <!-- <p style="background-image: url('bg.png');"> -->

        <!-- </div> -->

  <?php
    if(Yii::$app->user->isGuest)
    { ?>
      <span></span>
        <h3 class="benvenutoTitle">Benvenuto!</h3>
        <p><a class="button button1 center" href="/accessi/register">Registrazione Logopedista</a></p>
        <p><a class="button button1 center" href="/accessi/login">Accedi</a></p>
      <span></span>
    <?php  } ?>

    </div>

</div>



<style>
.benvenutoTitle {
  font-family: "SF Mono",Menlo,Consolas,Monaco,Liberation Mono,Lucida Console,monospace,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
  font-size: 90px;
  margin: 160px 0px 70px 0px;
  color:rgba(70, 70, 70, 100);
  font-family: "Cocogoose Classic Trial", monospace;

  text-shadow:
    4px 4px 0 #eefbff,
    -1px -1px 0 #eefbff,  
    1px -1px 0 #eefbff,
    -1px 1px 0 #eefbff,
    1px 1px 0 #eefbff;
}

.button {
  background-color: #1f493f; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  position: relative;
  border-radius: 50px;
  font-family: "Roboto", monospace;
  letter-spacing: 2px;
  font-size: 25px;
  font-weight: bold;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 3px solid #1f493f;
}

.button1:hover {
  background-color: #1f493f;
  color: white;
}

.center {
  margin: 0;
  position: relative;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.site-index{
  justify-content: center;
  align-items: center;       
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "SF Mono",Menlo,Consolas,Monaco,Liberation Mono,Lucida Console,monospace,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
    font-style: normal
}

body
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  font-family: "SF Mono",Menlo,Consolas,Monaco,Liberation Mono,Lucida Console,monospace,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
    font-style: normal
}

</style>