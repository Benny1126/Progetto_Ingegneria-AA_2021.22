<?php

namespace app\controllers;

class ScreeningController extends \yii\web\Controller
{
    //screening lato paziente
    public function actionIndexp()
    {
        return $this->render('indexP');
    }

    //screening lato logopedista
    public function actionIndexl()
    {
        return $this->render('indexL');
    }

}
