<?php

namespace app\controllers;

use app\models\eserciziTerapia\cercaEsercizio;
use app\models\eserciziTerapia\EsercizioTerapia;
use app\controller\GestioneTerapiaController;
use app\models\Paziente\Pazienti;
use app\models\Terapia\Terapia;
use app\models\accessi\NewUser;
use app\models\Paziente\cercaPazienti;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use app\models\Paziente\UploadForm;
use yii\web\UploadedFile;


class GestionePazientiController extends Controller
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
        $searchModel = new cercaPazienti();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($cf)
    {
        return $this->render('view', [
            'model' => $this->findModel($cf),
        ]);
    }

    public function actionCreate()
    {
        $model = new Pazienti();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'cf' => $model->cf]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($cf)
    {
        $model = $this->findModel($cf);
        $model1 = $this->findModel1($cf);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            
            $model1->nome = $model->nome;
            $model1->cognome = $model->cognome;
            $model->pass=password_hash($model->pass,PASSWORD_ARGON2I);
            if ($model->validate()) {
                $model1->pass=$model->pass;
                $model->save();
            }
            $model1->save();
            return $this->redirect(['view', 'cf' => $model->cf]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($cf)
    {
        $cf = (($this->findModel($cf))->cf);
        if ($this->findModel2($cf) !== NULL){
        $this->findModel2($cf)->delete();             //eliminazione Terapia e esercizi assegnati
        }
        $this->findModel($cf)->delete();              //Eliminazione pazienti tabella pazienti
        $this->findModel1($cf)->delete();            //Eliminazione pazient tabella utenti

        return $this->redirect(['index']);
    }

    //Trova i pazienti nella tabella pazienti
    protected function findModel($cf)
    {
        if (($model = Pazienti::findOne(['cf' => $cf])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //Trova pazienti nella tabella utenti
    protected function findModel1($cf)
    {
        if (($model = NewUser::findOne(['cf' => $cf])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //Trova Terapia nella tabella terapia associata al cf del paziente selezionato
    protected function findModel2($cf)
    {
        
        if (($model = Terapia::findOne(['cf_paziente' => $cf])) !== null) 
        {
            $id_terapia=$model->id_terapia;
            while(($this->findmodel3($id_terapia)) != NULL)
            {
            $this->findModel3($id_terapia)->delete();
            }
            return $model;
        }
        else
        { 
                return NULL; 
        }     
    }

    //Trova gli esercizi associati alla terapia del paziente selezionato
    protected function findModel3($id_terapia)
    {
           // $codice_terapia=$model->id_terapia;
            if (($model = EsercizioTerapia::findOne(['codice_terapia' => $id_terapia])) !== null) {      
            return $model;
            }
            else
            {
            return NULL;
            }
    }

    public function actionProfilo()
    {
        return $this->render('profilo', [
            'model' => $this->findModel(Yii::$app->user->identity->cf),
        ]);
    }

    //form per la diagnosi
    public function actionDiagnosi($cf)
    {
        $model = $this->findModel($cf);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            
            $model->diagnosi;
            
            $model->save();
            return $this->redirect(['view', 'cf' => $model->cf]);
        }

        return $this->render('diagnosi', [
            'model' => $model,
        ]);
    }

    public function actionUpload()
    {
        $model = $this->findModel(Yii::$app->user->identity->cf);

        if ($model->load(Yii::$app->request->post())) {
            $imageFile = UploadedFile::getInstance($model, 'foto');
            if(isset($imageFile->size)){
                $imageFile->saveAs('uploads/'.$model->cf.'.'.$imageFile->extension);
            } 

            if($imageFile){
            $model->foto=$imageFile->baseName.'.'.$imageFile->extension;
            $model->save(false);
            return $this->redirect(['profilo', 'cf' => $model->cf]);
            }
            else
            {
                return $this->redirect(['profilo', 'cf' => $model->cf]);
            }
        }
        else{
            return $this->render('upload', ['model' => $model]);
        }
    }

    //form per visualizzare i premi
    public function actionPremi($cf)
    {
        $model = $this->findModel($cf);
        $salvaB=$model->premi_bronzo;
        $salvaA=$model->premi_argento;
        $salvaO=$model->premi_oro;
        $salvaP=$model->premi_platino;
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            $bronzo=$model->premi_bronzo + $salvaB;
            $argento=$model->premi_argento + $salvaA;
            $oro=$model->premi_oro + $salvaO;
            $platino=$model->premi_platino + $salvaP;
            $model->premi_bronzo=$bronzo;
            $model->premi_argento=$argento;
            $model->premi_oro=$oro;
            $model->premi_platino=$platino;
            $model->save();
            return $this->redirect(['view', 'cf' => $model->cf]);
        }

        return $this->render('premi', [
            'model' => $model,
        ]);
    }

    //stampa la terapia del paziente selezionato sfruttando la funzione sottostante per cercarla
    public function actionTerapia()
    {
        if ($this-> trovaTerapia(Yii::$app->user->identity->cf) == NULL){
            return $this->redirect(['terapiapaznotfound']);
        }
        else {
        return $this->render('terapia', [
            'model' => $this-> trovaTerapia(Yii::$app->user->identity->cf),
        ]);
        }
    }

    //trova la terapia associata al paziente selezionato
    protected function trovaTerapia($cf)
    {
        if (($model = Terapia::findOne(['cf_paziente' => $cf])) !== null) {
            return $model;
        }
        else{
            return NULL;
        }
    }

    //stampa l'intera lista degli esercizi
    public function actionListaesercizi()
    {
        $tmp=Yii::$app->user->identity->cf;
        $model1 = Terapia::findOne(['cf_paziente' => $tmp]);
        $salvaId=$model1->id_terapia;
        $model=$this->findModel3($salvaId);

        $searchModel = new cercaEsercizio();
        $dataProvider = $searchModel->search($this->request->queryParams,$salvaId);

        return $this->render('listaesercizi', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    //se il paziente non ha una terapia associata qui viene stampato un messaggio di errore
    public function actionTerapiapaznotfound()
    {
        return $this->render('terapiapaznotfound');
    }
 

}
