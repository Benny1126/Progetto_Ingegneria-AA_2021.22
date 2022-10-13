<?php 
 
namespace app\controllers; 
use yii; 
use app\models\eserciziTerapia\cercaEsercizio;
use app\models\Caregivers\cercaP;
use app\models\Caregivers\Caregiver; 
use app\models\Paziente\Pazienti; 
use app\models\accessi\NewUser; 
use app\models\Caregivers\cercaCaregiver; 
use app\models\Caregivers\ContactForm; 
use yii\web\Controller; 
use yii\web\NotFoundHttpException; 
use yii\filters\VerbFilter; 
use app\controllers\GestionePazientiController; 
use app\models\prenotazioni\Prenotazione; 
use app\models\Terapia\Terapia;
use app\models\eserciziTerapia\EsercizioTerapia; 

class GestioneCaregiverController extends Controller 
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
        $searchModel = new cercaCaregiver(); 
        $dataProvider = $searchModel->search($this->request->queryParams); 
 
        return $this->render('index', [ 
            'searchModel' => $searchModel, 
            'dataProvider' => $dataProvider, 
        ]); 
    } 

    public function actionTerapianotfound(){
        return $this->render('terapianotfound');
    }
  
    public function actionView($cf) 
    { 
        return $this->render('view', [ 
            'model' => $this->findModel($cf), 
        ]); 
    } 
  
    public function actionCreate() 
    { 
        $model = new Caregiver(); 
 
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
        while(($this->findModel6($cf)) != NULL){ 
            $this->findModel6($cf)->delete(); 
            } 
        while(($this->findModel3($cf)) != NULL){ 
        $this->findModel2($cf)->delete(); 
        } 
        $this->findModel1($cf)->delete(); 
        $this->findModel($cf)->delete(); 
        return $this->redirect(['index']); 
    
    } 
 
    //trova i caregiver nella tabella caregiver 
    protected function findModel($cf) 
    { 
        if (($model = Caregiver::findOne(['cf' => $cf])) !== null) { 
            return $model; 
        } 
 
        throw new NotFoundHttpException('The requested page does not exist.'); 
    } 
 
    //trova i caregiver nella tabella utenti 
    protected function findModel1($cf) 
    { 
        if (($model = NewUser::findOne(['cf' => $cf]))!== null) { 
            return $model; 
        } 
 
        throw new NotFoundHttpException('The requested page does not exist.'); 
    } 
 
    //trova i pazienti del caregiver istanziato nella tabella pazienti 
    protected function findModel2($cf) 
    { 
        if (($model = Pazienti::findOne(['cf_care' => $cf])) !== null) { 
             
            $cf_paziente = $model -> cf;
            if(($this->findModel4($cf_paziente)) != NULL)
            {
                // $modelTerapia = Terapia::findOne(['cf_paziente' => $cf_paziente]);
                // $id_terapia = $modelTerapia->id_terapia;
                $this->findModel4($cf_paziente)->delete();
            }
            $this->findModel3($cf)->delete(); 
            return $model; 
        } 
        else{ 
            return NULL; 
        } 
    } 
 
    //trova i pazienti del caregiver istanziato nella tabella utenti 
    protected function findModel3($cf) 
    { 
        if(($model = Pazienti::findOne(['cf_care' => $cf])) !== null) 
        {    
            $username = $model->username; 
            if (($model = NewUser::findOne(['username' => $username])) !== null) { 
                return $model; 
            }  
            else 
            { 
                return NULL; 
            } 
        } 
        else 
        { 
            return NULL; 
        } 
    } 

    //Trova l Terapia dei pazienti del caregiver istanziato nella tabella terapia
    protected function findModel4($cf)
    {
        
        if (($model = Terapia::findOne(['cf_paziente' => $cf])) !== null) 
        {
            $id_terapia=$model->id_terapia;
            while(($this->findModel5($id_terapia)) != NULL)
            {
            $this->findModel5($id_terapia)->delete();
            }
            return $model;
        }
        else
        { 
            return NULL; 
        }     
    }
    
    //Trova l'esercizio della terapia del paziente
    protected function findModel5($id_terapia)
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
    
    //trova le prenotazioni del caregiver istanziato  
    protected function findModel6($cf) 
    { 
        if (($model = Prenotazione::findOne(['cf_c' => $cf])) !== null) { 
            return $model; 
        }    
            else
            {
            return NULL;
            }
    } 
    public function actionContact() 
    { 
        $model = new ContactForm(); 
        $model1 = $this->findModel(Yii::$app->user->identity->cf); 
        $model->name = $model1->nome; 
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) { 
            Yii::$app->session->setFlash('contactFormSubmitted'); 
            $model->email='b.bellarte1@studenti.uniba.it'; 
            return $this->refresh(); 
        } 
        return $this->render('contact', [ 
            'model' => $model, 
        ]); 
    } 
 
    public function actionPrenota($cf){ 
        $model = new prenotazione(); 
        $model->cf_c=$cf; 
        if ($this->request->isPost) { 
            if ($model->load($this->request->post()) && $model->save()) { 
                return $this->redirect(['/accessi/indexcare']); 
            } 
        } else { 
            $model->loadDefaultValues(); 
        } 
 
        return $this->render('prenota', [ 
            'model' => $model, 
        ]); 
    } 

    // genera la lista pazienti associati al codice fiscale del caregiver istanziato
    public function actionListapazienti()
    {
        $tmp=Yii::$app->user->identity->cf;
        $codice=$tmp;

        $searchModel = new cercaP();  //model che ricerca i pazienti in base al parametro codice fiscale
        $dataProvider = $searchModel->search($this->request->queryParams,$codice);

        return $this->render('listapazienti', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    //mostra la terapia del paziente di cui il caregiver vuol monitorare , sfruttanto la funzione sottostante per trovarla
    public function actionTerapiapaziente($cf)
    {
        if(($this->trovaTerapia($cf))!== NULL){
        return $this->render('terapiapaziente', ['model' => $this-> trovaTerapia($cf),]);
        }
        else 
        return $this->redirect(['/gestione-caregiver/terapianotfound']); 
    }

    //cerca la terapia del paziente selezionato nel momento in cui il caregiver vuole monitorare la terapia
    protected function trovaTerapia($cf)
    {
        if (($model = Terapia::findOne(['cf_paziente' => $cf])) !== null) {
            return $model;
        }
        else{
            return NULL;
            
        }
    }

    //trova l'esercizio e lo mostra a schermo nel momento in cui il caregiver seleziona la visualizzazione di un esercizio 
    public function actionEserciziterapiapaziente($id_terapia)
    {
        $searchModel = new cercaEsercizio();
        $dataProvider = $searchModel->search($this->request->queryParams,$id_terapia);

        return $this->render('eserciziterapiapaziente', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    //mostra l'esercizio e01 non permettendone la modifica nel db
    public function actionVisualizzae01($codice_esercizio)
    {
        $ruolo=Yii::$app->user->identity->ruolo;
        if ($ruolo == 2){
            $model = $this->findModelvisualizzaesercizio($codice_esercizio);
            $model->attivita_svolta=0;
            $model->save();
        }
        $model = $this->findModelvisualizzaesercizio($codice_esercizio);
        if ($model->attivita_svolta == 0){
            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                
                $model->valutazione;
                $model->attivita_svolta=1;
                $model->save();
                $model->risposta1;
                $model->risposta2;
                $model->risposta3;
                $model->risposta4;
                $model->risposta5;
                $model->risposta6;
                $model->risposta7;
                $model->risposta8;


                return $this->redirect(['/accessi/indexcare']);
            }
             return $this->render('visualizzae01', ['model' => $model,]);
        }
        else{
            throw new NotFoundHttpException('L esercizio è stato già svolto');  //se possibile stampare un messaggio invece di un errore
        }
    }

    //mostra l'esercizio e02 non permettendone la modifica nel db
    public function actionVisualizzae02($codice_esercizio)
    {
        $model = $this->findModelvisualizzaesercizio($codice_esercizio);
            if ($this->request->isPost && $model->load($this->request->post())) {
                
                $model->valutazione;
                $model->risposta1;
                $model->risposta2;
                $model->risposta3;
                $model->risposta4;
                $model->risposta5;
                $model->risposta6;
                $model->risposta7;
                $model->risposta8;


                return $this->redirect(['/accessi/indexcare']);
            }
             return $this->render('visualizzae02', ['model' => $model,]);       
    }

    //mostra l'esercizio e03 non permettendone la modifica nel db
    public function actionVisualizzae03($codice_esercizio)
    {
        $model = $this->findModelvisualizzaesercizio($codice_esercizio);
            if ($this->request->isPost && $model->load($this->request->post())) {
                
                $model->valutazione;
                $model->risposta1;
                $model->risposta2;
                $model->risposta3;
                $model->risposta4;
                $model->risposta5;
                $model->risposta6;
                $model->risposta7;
                $model->risposta8;


                return $this->redirect(['/accessi/indexcare']);
            }
             return $this->render('visualizzae03', ['model' => $model,]);       
    }

    //mostra l'esercizio e04 non permettendone la modifica nel db
    public function actionVisualizzae04($codice_esercizio)
    {
        $model = $this->findModelvisualizzaesercizio($codice_esercizio);
            if ($this->request->isPost && $model->load($this->request->post())) {
                
                $model->valutazione;
                $model->risposta1;
                $model->risposta2;
                $model->risposta3;
                $model->risposta4;
                $model->risposta5;
                $model->risposta6;
                $model->risposta7;
                $model->risposta8;


                return $this->redirect(['/accessi/indexcare']);
            }
             return $this->render('visualizzae04', ['model' => $model,]);       
    }

    //trova gli esercizi della terapia del paziente che il caregiver ha selezionato
    protected function findModelvisualizzaesercizio($codice_esercizio)
    {
        if (($model = EsercizioTerapia::findOne(['codice_esercizio' => $codice_esercizio])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
