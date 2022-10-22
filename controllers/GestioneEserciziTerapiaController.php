<?php

namespace app\controllers;

use yii;
use app\models\eserciziTerapia\EsercizioTerapia;
use app\models\Esercizi\Esercizio;
use app\models\eserciziTerapia\cercaET;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Terapia\Terapia;
use app\models\eserciziTerapia\cercaEsercizio;
/**
 * GestioneEserciziTerapiaController implements the CRUD actions for EsercizioTerapia model.
 */
class GestioneEserciziTerapiaController extends Controller
{

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }


    public function actionIndex()
    {
        $searchModel = new cercaET();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($codice_esercizio)
    {
        return $this->render('view', [
            'model' => $this->findModel($codice_esercizio),
        ]);
    }


    public function actionCreate()
    {
        $model = new EsercizioTerapia();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $model->valutazione=0;
                return $this->redirect(['view', 'codice_esercizio' => $model->codice_esercizio]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($codice_esercizio)
    {
        $model = $this->findModel($codice_esercizio);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codice_esercizio' => $model->codice_esercizio]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionDelete($codice_esercizio)
    {
        $this->findModel($codice_esercizio)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($codice_esercizio)
    {
        if (($model = EsercizioTerapia::findOne(['codice_esercizio' => $codice_esercizio])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionEsercizio($id_terapia)
    {
        $model = new EsercizioTerapia();
        $model->codice_terapia=$id_terapia;

        if ($this->request->isPost) {
        if ($model->load($this->request->post()) && $model->save()) {
                
                //$model->nome=$_POST['EsercizioTerapia']['nome'];
                
                return $this->render('view', ['model' => $model,]);
                
            }
            else {
                //throw new NotFoundHttpException('la terapia è stata già creata');
                $model->loadDefaultValues();
            }     
        }

        return $this->render('esercizio', [
            'model' => $model,
        ]);
    }

    //gioco uditivo dove bisogna ripetere le parole
    public function actionE01($codice_esercizio)
    {
        $ruolo=Yii::$app->user->identity->ruolo;
        if ($ruolo == 3){
            $model = $this->findModel($codice_esercizio);
            $model->attivita_svolta=0;
            $model->save();
        }
        $model = $this->findModel($codice_esercizio);
        if ($model->attivita_svolta == 0){
            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                
                $model->valutazione;
                $model->attivita_svolta=1;
                $model->save();
                return $this->redirect(['/site/index']);
            }
             return $this->render('e01', ['model' => $model,]);
        }
        else{
            throw new NotFoundHttpException('L esercizio è stato già svolto');  //se possibile stampare un messaggio invece di un errore
        }
    }

    //gioco della discriminazione della sorgente sonora
    public function actionE02($codice_esercizio)
    {
        $ruolo=Yii::$app->user->identity->ruolo;
        if ($ruolo == 3){
            $model = $this->findModel($codice_esercizio);
            $model->attivita_svolta=0;
            $model->save();
        }
        $model = $this->findModel($codice_esercizio);
        if ($model->attivita_svolta == 0){
            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                
                $model->valutazione;
                $model->attivita_svolta=1;
                $model->risposta1;
                $model->risposta2;
                $model->risposta3;
                $model->risposta4;
                $model->risposta5;
                $model->risposta6;
                $model->risposta7;
                $model->risposta8;

                $model->save();
                return $this->redirect(['/site/index']);
            }
             return $this->render('e02', ['model' => $model,]);
        }
        else{
            throw new NotFoundHttpException('L esercizio è stato già svolto');  //se possibile stampare un messaggio invece di un errore
        }
    }
    public function actionE03($codice_esercizio)
    {
        $ruolo=Yii::$app->user->identity->ruolo;
        if ($ruolo == 3){
            $model = $this->findModel($codice_esercizio);
            $model->attivita_svolta=0;
            $model->save();
        }
        $model = $this->findModel($codice_esercizio);
        if ($model->attivita_svolta == 0){
            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                
                $model->valutazione;
                $model->attivita_svolta=1;
                $model->risposta1;
                $model->risposta2;
                $model->risposta3;
                $model->risposta4;
                $model->risposta5;
                $model->risposta6;
                $model->risposta7;
                $model->risposta8;
                $model->save();
                return $this->redirect(['/site/index']);
            }
             return $this->render('e03', ['model' => $model,]);
        }
        else{
            throw new NotFoundHttpException('L esercizio è stato già svolto');  //se possibile stampare un messaggio invece di un errore
        }
    }

    public function actionE04($codice_esercizio)
    {
        $ruolo=Yii::$app->user->identity->ruolo;
        if ($ruolo == 3){
            $model = $this->findModel($codice_esercizio);
            $model->attivita_svolta=0;
            $model->save();
        }
        $model = $this->findModel($codice_esercizio);
        if ($model->attivita_svolta == 0){
            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                
                $model->valutazione;
                $model->attivita_svolta=1;
                $model->risposta1;
                $model->risposta2;
                $model->risposta3;
                $model->risposta4;
                $model->risposta5;
                $model->risposta6;
                $model->risposta7;
                $model->risposta8;

                $model->save();
                return $this->redirect(['/site/index']);
            }
             return $this->render('e04', ['model' => $model,]);
        }
        else{
            throw new NotFoundHttpException('L esercizio è stato già svolto');  //se possibile stampare un messaggio invece di un errore
        }
    }

    public function actionVisualizzat($cf_paziente)
    {
        return $this->render('visualizzat', ['model' => $this-> trovaTerapia($cf_paziente),]);
    }
    protected function trovaTerapia($cf_paziente)
    {
        if (($model = Terapia::findOne(['cf_paziente' => $cf_paziente])) !== null) {
            return $model;
        }
        else{
            return NULL;
        }
    }

    protected function findModelesercizi($id_terapia)
    {
            if (($model = EsercizioTerapia::findOne(['codice_terapia' => $id_terapia])) !== null) {      
            return $model;
            }
            else
            {
            return NULL;
            }
    }
    public function actionListaesercizisvolti($cf_paziente)
    {
        $tmp=$cf_paziente;
        $model1 = Terapia::findOne(['cf_paziente' => $tmp]);
        $salvaId=$model1->id_terapia;
        $model=$this->findModelesercizi($salvaId);

        $searchModel = new cercaEsercizio();
        $dataProvider = $searchModel->search($this->request->queryParams,$salvaId);

        return $this->render('listaesercizisvolti', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


}
