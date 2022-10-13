<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;
use \app\models\accessi\NewUser;
use \app\models\Paziente\Pazienti;
use \app\models\Caregivers\Caregiver;
use \app\models\Logopedisti\Logopedisti;
use \app\views\accessi;
use app\models\accessi\LoginForm;
use app\models\accessi\LoginFormP;
use app\models\accessi\LoginFormC;
use app\models\accessi\LoginFormL;

class AccessiController extends \yii\web\Controller
{

    public function actionIndexcare()
    {
        return $this->render('indexCare');
    }

    public function actionIndexlogo()
    {
        return $this->render('indexLogo');
    }

    public function actionIndexpaz()
    {
        return $this->render('indexPaz');
    }

    public function actionRegisterp()
    {
        $model = new NewUser();
    
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $x=$model->ruolo;
                    $model = new Pazienti();
                    $model->username=$_POST['NewUser']['username'];
                    $model->nome=$_POST['NewUser']['nome'];
                    $model->cognome=$_POST['NewUser']['cognome'];
                    $model->email=$_POST['NewUser']['username']; 
                    $model->foto='http://localhost:8080/uploads/'.$model->username.'.png';
                    $salva=$model->email.'@gmail.com';
                    $model->email=$salva;
                    $model->cf=$_POST['NewUser']['cf'];
                    $model->ruolo=1;
                    $model->pass=password_hash($_POST['NewUser']['pass'],PASSWORD_ARGON2I);
                    $model->authKey =md5(random_bytes(5)); 
                    $model->accessToken =password_hash(random_bytes(10),PASSWORD_DEFAULT);
                    $salvacf=(Yii::$app->user->identity->cf);
                    $model->cf_care=$salvacf;
                    $model->save();
                    $model = new NewUser();
                    $model->username=$_POST['NewUser']['username'];
                    $model->nome=$_POST['NewUser']['nome'];
                    $model->cognome=$_POST['NewUser']['cognome'];
                    $model->email=$salva;
                    $model->cf=$_POST['NewUser']['cf'];
                    $model->ruolo=1;
                    $model->pass=password_hash($_POST['NewUser']['pass'],PASSWORD_ARGON2I);
                    $model->authKey =md5(random_bytes(5)); 
                    $model->accessToken =password_hash(random_bytes(10),PASSWORD_DEFAULT);
                    $model->save();
                if($model->save()){
                    return $this->render('indexCare');
                }
            }
        }
    
        return $this->render('registerp', [
            'model' => $model,
        ]);
    }

    public function actionLoginp()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginFormP();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            return $this->render('indexPaz', ['model' => $model,]);;
        }

        $model->pass = '';
        return $this->render('loginp', [
            'model' => $model,
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            if (Yii::$app->user->identity->ruolo == 2){
            return $this->render('indexCare', ['model' => $model,]);
            }
            //se logga un Logopedista
            elseif(Yii::$app->user->identity->ruolo == 3){
            return $this->render('indexLogo', ['model' => $model,]);
            }
            else{
                return $this->render('indexPaz', ['model' => $model,]);
            
            }
        }

        $model->pass = '';
        return $this->render('login', ['model' => $model,]);
    }

    public function actionRegister()
    {
        $model = new NewUser();
    
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $x=$model->ruolo;
                    if ($x == 2) {
                    $model = new Caregiver();
                    $model->nome=$_POST['NewUser']['nome'];
                    $model->cognome=$_POST['NewUser']['cognome'];
                    $model->cf=$_POST['NewUser']['cf'];
                    $model->email=$_POST['NewUser']['email'];
                    $model->ruolo=$_POST['NewUser']['ruolo'];
                    $model->pass=password_hash($_POST['NewUser']['pass'],PASSWORD_ARGON2I);
                    $model->authKey =md5(random_bytes(5)); 
                    $model->accessToken =password_hash(random_bytes(10),PASSWORD_DEFAULT);
                    $model->save();
                    $model = new NewUser();
                    $model->nome=$_POST['NewUser']['nome'];
                    $model->cognome=$_POST['NewUser']['cognome'];
                    $model->cf=$_POST['NewUser']['cf'];
                    $model->email=$_POST['NewUser']['email'];
                    $model->ruolo=$_POST['NewUser']['ruolo'];
                    $model->pass=password_hash($_POST['NewUser']['pass'],PASSWORD_ARGON2I);
                    $model->authKey =md5(random_bytes(5)); 
                    $model->accessToken =password_hash(random_bytes(10),PASSWORD_DEFAULT);
                    $model->save();
                }
                else {
                    $model = new Logopedisti();
                    $model->nome=$_POST['NewUser']['nome'];
                    $model->cognome=$_POST['NewUser']['cognome'];
                    $model->cf=$_POST['NewUser']['cf'];
                    $model->email=$_POST['NewUser']['email'];
                    $model->ruolo=$_POST['NewUser']['ruolo'];
                    $model->pass=password_hash($_POST['NewUser']['pass'],PASSWORD_ARGON2I);
                    $model->authKey =md5(random_bytes(5)); 
                    $model->accessToken =password_hash(random_bytes(10),PASSWORD_DEFAULT);
                    $model->save();
                    $model = new NewUser();
                    $model->nome=$_POST['NewUser']['nome'];
                    $model->cognome=$_POST['NewUser']['cognome'];
                    $model->cf=$_POST['NewUser']['cf'];
                    $model->email=$_POST['NewUser']['email'];
                    $model->ruolo=$_POST['NewUser']['ruolo'];
                    $model->pass=password_hash($_POST['NewUser']['pass'],PASSWORD_ARGON2I);
                    $model->authKey =md5(random_bytes(5)); 
                    $model->accessToken =password_hash(random_bytes(10),PASSWORD_DEFAULT);
                    $model->save();
                }
                if($model->save()){
                    return $this->redirect(['/accessi/indexlogo']);
                }
            }
        }
    
        return $this->render('register', [
            'model' => $model,
        ]);
    }
    
}
