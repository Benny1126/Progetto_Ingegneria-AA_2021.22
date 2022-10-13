<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


//$this->params['breadcrumbs'][] = ['label' => 'Pazienti', 'url' => ['index']];
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
            </ol>
          </nav>
          <!-- /Breadcrumb -->

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">


                      <h4>
                      <?= DetailView::widget([
                'model' => $model,
                'attributes' => [  
                    [
                        'attribute'=>'foto',
                        'value'=> function ($model) {
                            return $model->getImageUrl(); 
                        },
                        'format' => ['image',['width'=>'150','height'=>'150']],
                    ],
                    
                ],
            ]) ?>
                    <p>
            <?= Html::a('Aggiorna la tua immagine profilo', ['upload', 'cf' => $model->cf], ['class' => 'btn btn-primary']) ?>
        </p>
                      </h4>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              <p><img src="https://logos.textgiraffe.com/logos/logo-name/Benvenuto-designstyle-colors-m.png"  class="center" height=150 width=280 ></p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nome</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php 
                     echo $model->nome;
                     ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Cognome</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php 
                     echo $model->cognome;
                     ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php 
                     echo $model->username;
                     ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Codice Fiscale Caregiver</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php 
                     echo $model->cf_care;
                     ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                  <hr>
                  <div class="row">
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                    <p><img src="https://www.playstationzone.it/wp-content/uploads/2019/04/Psn_bronze_trophy.png" alt="Trofeo di Bronzo" width="100" height="100">Trofei di Bronzo: <?php echo($model->premi_bronzo)?></p>
        <p><img src="https://www.playstationzone.it/wp-content/uploads/2019/04/argento-150x150.png" alt="Trofeo di Argento" width="100" height="100">Trofei di Argento: <?php echo($model->premi_argento)?></p>
      
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                    <p><img src="https://www.playstationzone.it/wp-content/uploads/2019/04/gold-ps3-trophy.png" alt="Trofeo d'oro" width="100" height="100">Trofei d'Oro: <?php echo($model->premi_oro)?></p>
        <p><img src="https://www.playstationzone.it/wp-content/uploads/2019/04/platinum-trophy-png-1-150x150.png" alt="Trofeo di Platino" width="100" height="100">Trofei di Platino: <?php echo($model->premi_platino)?></p>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>


    <style>.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 90%;
}</style>