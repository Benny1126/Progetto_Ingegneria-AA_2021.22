<?php

namespace app\controllers;

use app\models\Terapia\Terapia;
use app\models\eserciziTerapia\EsercizioTerapia;
use app\models\Terapia\cercaT;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class GestioneTerapiaController extends Controller
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
        $searchModel = new cercaT();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
 
    public function actionView($id_terapia)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_terapia),
        ]);
    }

    public function actionCreate()
    {
        $model = new Terapia();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_terapia' => $model->id_terapia]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id_terapia)
    {
        $model = $this->findModel($id_terapia);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_terapia' => $model->id_terapia]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id_terapia)
    {
        if(($this->findModel1($id_terapia))!== NULL){
            $this->findModel1($id_terapia)->delete();
        }
        $this->findModel($id_terapia)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id_terapia)
    {
        
        if (($model = Terapia::findOne(['id_terapia' => $id_terapia])) !== null) {
            $id_terapia=$model->id_terapia;
            while(($this->findModel1($id_terapia)) != NULL)
            {
            $this->findModel1($id_terapia)->delete();
            }
            return $model;
        }
        else
        { 
            return NULL; 
        }   
    }

    protected function findModel1($id_terapia)
    {
        if (($model = EsercizioTerapia::findOne(['codice_terapia' => $id_terapia])) !== null) {      
            return $model;
            }
            else
            {
            return NULL;
            }
    }

    public function actionTerapia($cf)
    {
        $model = new Terapia();
        $model->cf_paziente=$cf;
        if ($this->request->isPost) {
        if ($model->load($this->request->post()) && $model->save()) {
                
                $model->nome=$_POST['Terapia']['nome'];
                return $this->render('view', ['model' => $model,]);
                
            }
            else {
                //throw new NotFoundHttpException('la terapia è stata già creata');
                $model->loadDefaultValues();
            }     
        }

        return $this->render('terapia', [
            'model' => $model,
        ]);
    }

}
