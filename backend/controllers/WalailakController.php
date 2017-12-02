<?php

namespace backend\controllers;

use Yii;
use backend\models\Walailak;
use backend\models\SeachWalailak;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WalailakController implements the CRUD actions for Walailak model.
 */
class WalailakController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Walailak models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SeachWalailak();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Walailak model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Walailak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Walailak();
        $model->a13 = "ไทยบุรี";
        $model->a14 = "ท่าศาลา";
        $model->a15 = "นครศรีธรรมราช";
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Walailak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->a13 = "ไทยบุรี";
        $model->a14 = "ท่าศาลา";
        $model->a15 = "นครศรีธรรมราช";
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Walailak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Walailak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Walailak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Walailak::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionExport(){
    	$model = Walailak::find()->all();
    	$this->layout = 'empty';
    	return $this->render('export', [
    			'model' => $model,
    	]);
    }
    
    public function actionAdl(){
    	$model = Walailak::find()->all();
    	$this->layout = 'empty';
    	return $this->render('adl', [
    			'model' => $model,
    	]);
    }
    
    public function actionOst(){
    	$model = Walailak::find()->all();
    	$this->layout = 'empty';
    	return $this->render('ost', [
    			'model' => $model,
    	]);
    }
}
