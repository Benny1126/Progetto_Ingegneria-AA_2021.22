<?php

namespace app\controllers;

use app\models\Esercizi\Esercizio;
use app\models\Esercizi\cercaE;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\eserciziTerapia\EsercizioTerapia;
use app\models\eserciziTerapia\cercaET;


/**
 * GestioneEserciziController implements the CRUD actions for Esercizio model.
 */
class GestioneEserciziController extends Controller
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
        $searchModel = new cercaE();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($id_esercizio)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_esercizio),
        ]);
    }

 
    public function actionCreate()
    {
        $model = new Esercizio();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_esercizio' => $model->id_esercizio]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

 
    public function actionUpdate($id_esercizio)
    {
        $model = $this->findModel($id_esercizio);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_esercizio' => $model->id_esercizio]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionDelete($id_esercizio)
    {
        $this->findModel($id_esercizio)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id_esercizio)
    {
        if (($model = Esercizio::findOne(['id_esercizio' => $id_esercizio])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }




}
