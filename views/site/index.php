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

/* .container
{
    font-family: "SF Mono",Menlo,Consolas,Monaco,Liberation Mono,Lucida Console,monospace,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
    font-style: normal
}

.container .box
{
  position: relative;
  width: 320px;
  height: 400px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 40px 30px;
  transition: 0.5s;
}

.container .box::before
{
  content:' ';
  position: absolute;
  top: 0;
  left: 50px;
  width: 50%;
  height: 100%;
  text-decoration: none;
  background: #fff;
  border-radius: 8px;
  transform: skewX(15deg);
  transition: 0.5s;
}

.container .box::after
{
  content:'';
  position: absolute;
  top: 0;
  left: 50;
  width: 50%;
  height: 100%;
  background: #fff;
  border-radius: 8px;
  transform: skewX(15deg);
  transition: 0.5s;
  filter: blur(30px);
}

.container .box:hover:before,
.container .box:hover:after
{
  transform: skewX(0deg);
  left: 20px;
  width: calc(100% - 90px);
  
}

.container .box:nth-child(1):before,
.container .box:nth-child(1):after
{
  background: linear-gradient(315deg, #ffbc00, #ff0058)
}

.container .box:nth-child(2):before,
.container .box:nth-child(2):after
{
  background: linear-gradient(315deg, #03a9f4, #4dff03)
}

.container .box:nth-child(3):before,
.container .box:nth-child(3):after
{
  background: linear-gradient(315deg, #4dff03, #00d0ff)
}

.container .box span
{
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 5;
  pointer-events: none;
}

.container .box span::before
{
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 0;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  opacity: 0;
  transition: 0.1s;  
  animation: animate 2s ease-in-out infinite;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08)
}

.container .box:hover span::before
{
  top: -50px;
  left: 50px;
  width: 100px;
  height: 100px;
  opacity: 1;
}

.container .box span::after
{
  content:'';
  position: absolute;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  opacity: 0;
  transition: 0.5s;
  animation: animate 2s ease-in-out infinite;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
  animation-delay: -1s;
}

.container .box:hover span:after
{
  bottom: -50px;
  right: 50px;
  width: 100px;
  height: 100px;
  opacity: 1;
}

@keyframes animate
{
  0%, 100%
  {
    transform: translateY(10px);
  }
  
  50%
  {
    transform: translate(-10px);
  }
}

.container .box .content
{
  position: relative;
  left: 0;
  padding: 20px 40px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  z-index: 1;
  transform: 0.5s;
  color: #fff;
}

.container .box:hover .content
{
  left: -25px;
  padding: 60px 40px;
}

.container .box .content h2
{
  font-size: 2em;
  color: #fff;
  margin-bottom: 10px;
}

.container .box .content p
{
  font-size: 1.1em;
  margin-bottom: 10px;
  line-height: 1.4em;
}

.container .box .content a
{
  display: inline-block;
  font-size: 1.1em;
  color: #111;
  background: #fff;
  padding: 10px;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 700;
  margin-top: 5px;
}

.container .box .content a:hover
{
  background: #ffcf4d;
  border: 1px solid rgba(255, 0, 88, 0.4);
  box-shadow: 0 1px 15px rgba(1, 1, 1, 0.2);
} */
    
</style>