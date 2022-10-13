<?php
/* @var $this yii\web\View */
?>
<div class="c">
    <a class="lol btn btn-lg " href="https://docs.google.com/forms/d/e/1FAIpQLScsC6nScbxd5PnSSRXFU_HJPCa-X-hYQpeDanuDnSm0hta0pA/viewform?usp=sf_link" target="_blank">
    <button class="button btns btns-3 hover-border-3">
        <span>Effettua lo Screening</span>
    </button>
    </a>
</div>
    <img class="immagine" src="https://www.pngmart.com/files/21/Female-Doctor-PNG.png" alt="">
<style>

.c
{
    position: absolute;
    top: 250px;    
}

.immagine
{
    display: block;
  margin-left: 600px;
  margin-right: auto;
  width: 50%;
  position: absolute;
  top: 101px;
}


.lol
{   
    
  width: 50%;
  padding: 10px;
    position: absolute;

}

.dissolvenza
{
    width: 100%;
    height: 100%;
    padding: 0;
}

.center
{
    margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}


    :active, :hover, :focus {
  outline: 0!important;
  outline-offset: 0;
}
::before,
::after {
  position: absolute;
  content: "";
}
.btns-holder {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 1000px;
  margin: 10px auto 35px;
}

.btns {
  position: relative;
  display: inline-block;
  width: auto; height: auto;
  background-color: transparent;
  border: none;
  cursor: pointer;
  margin: 0px 25px 15px;
  min-width: 1000px;
}
  .btns span {         
    position: relative;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 2px;
    text-transform: uppercase;
    top: 0; left: 0;
    width: 100%;
    padding: 15px 20px;
    transition: 0.3s;
  }

  .btns-3 {
  padding: 5px;
}
.btns-3 span {
    text-align: center;
    color: rgb(255, 255, 255);
    background-color: rgb(54, 56, 55);
}
.btns-3::before,
.btns-3::after {
  background: transparent;
  z-index: 2;
}
.btns.hover-border-3::before,
.btns.hover-border-3::after {
  width: 0%; height: 0%;
  opacity: 0;
  transition: width 0.2s 0.15s linear, height 0.15s linear, opacity 0s 0.35s;
}
.btns.hover-border-3::before {
  top: 0; right: 0;
  border-top: 1px solid rgb(28, 31, 30);
  border-left: 1px solid rgb(28, 31, 30);
}
.btns.hover-border-3::after {
  bottom: 0; left: 0;
  border-bottom: 1px solid rgb(28, 31, 30);
  border-right: 1px solid rgb(28, 31, 30);
}
.btns.hover-border-3:hover::before,
.btns.hover-border-3:hover::after {
  width: 100%; height: 99%;
  opacity: 1;
  transition: width 0.2s linear, height 0.15s 0.2s linear, opacity 0s;   
}

</style>

