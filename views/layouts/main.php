<?php

/** @var yii\web\View $this */
/** @var string $content */
use yii\helpers\Url;
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\widgets\Menu;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<link rel="icon" type="image/x-icon" href="test3.png">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    

</head>

<body class="d-flex flex-column h-100">
    
<?php $this->beginBody() ?>

<header>
    <?php
    
    NavBar::begin([
        'brandLabel' => Html::img('test2.png', ['alt'=>Yii::$app->name, 'width'=>'70px']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            //'class' => 'navbar sticky top-md navbar-dark fixed-top ',
           // 'class' => 'navbar navbar-expand-lg bg-light fixed-top  ',
            //'class' => 'navbar sticky top navbar-dark bg-dark ',
            //'class' =>'navbar-expand navbar-dark bg-dark fixed-top',
            'class' =>'my-navbar top-md navbar-light navbar fixed-top ',

        ],
    ]);
    
    $navItem=[];

    if(Yii::$app->user->isGuest){
        array_push($navItem,['label' => 'Login', 'url' => ['/accessi/login']]);
        array_push($navItem,['label' => 'Informazioni', 'url' => ['/site/about']]);
        
    }
    elseif(Yii::$app->user->identity->ruolo == 1){
        array_push($navItem,['label' => 'Home', 'url' => ['/accessi/indexpaz']]);
        array_push($navItem,['label' => 'Il mio Profilo', 'url' => ['/gestione-pazienti/profilo']]);
        array_push($navItem,['label' => 'Screening', 'url' => ['/screening/indexp']]);    
        array_push($navItem,['label' => 'Informazioni', 'url' => ['/site/about']]);     
        array_push($navItem,['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'], 'template' => '<a href="{url}" data-method="post">{label}</a>', 'linkOptions' => ['data-method' => 'post']]);
    }
    else if (Yii::$app->user->identity->ruolo == 2) {
        $navItem=[
            [
                'label' =>'Pazienti',
                'items' =>[
                    ['label' => 'Registra Paziente', 'url' => ['/accessi/registerp']],
                    ['label' => 'Lista pazienti', 'url' => ['/gestione-caregiver/listapazienti']],
                ]
            ]
        ];
        array_push($navItem,['label' => 'Home', 'url' => ['/accessi/indexcare']]);
        array_push($navItem,['label' => 'Informazioni', 'url' => ['/site/about']]);
        array_push($navItem,['label' => 'Contatti', 'url' => ['/gestione-caregiver/contact']]);
        array_push($navItem,['label' => 'Logout (' . Yii::$app->user->identity->email . ')', 'url' => ['/site/logout'], 'template' => '<a href="{url}" data-method="post">{label}</a>', 'linkOptions' => ['data-method' => 'post']]);
    }
    else{
        array_push($navItem,['label' => 'Home', 'url' => ['/accessi/indexlogo']]);
        $navItem=[
        [
            'label' =>'Liste',
            'items' =>[
                ['label' => 'Lista Caregiver', 'url' => ['/gestione-caregiver']],
                ['label' => 'Lista pazienti', 'url' => ['/gestione-pazienti']],
                ['label' => 'Elenco Screening', 'url' => ['/screening/indexl']],
            ]
        ]];
        array_push($navItem,['label' => 'Home', 'url' => ['/accessi/indexlogo']]);
        array_push($navItem,['label' => 'Registra Caregiver', 'url' => ['/accessi/register']]);
        array_push($navItem, ['label' => 'Logout (' . Yii::$app->user->identity->email . ')', 'url' => ['/site/logout'], 'template' => '<a href="{url}" data-method="post">{label}</a>', 'linkOptions' => ['data-method' => 'post']]);        
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $navItem
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
<div class="container dissolvenza" background-color="red">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div>
    <!-- <b><p class="float-left">[Pinguini Tattici Nucleari] Benedetto Bellarte - Giovanni Cosi - Filippo Bilanzuoli - Federico Lauriola <?= date('Y') ?></p></b> -->
        <b><p style="color:#193a31"> [Pinguini Tattici Nucleari] Benedetto Bellarte - Giovanni Cosi - Filippo Bilanzuoli - Federico Lauriola <?= date('Y') ?></p></b>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<style>

.boxed {
  border: 1px solid green ;
  width: 1920px;
  height: 20px;
  padding: 20px;
  margin: 20px;
  text-align: center;
} 

</style>
