<?php

namespace backend\controllers;

use Yii;
use backend\models\Bansongprag;
use backend\models\SearchBansongprag;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Bandonkri;

/**
 * BansongpragController implements the CRUD actions for Bansongprag model.
 */
class BansongpragController extends Controller
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
     * Lists all Bansongprag models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchBansongprag();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bansongprag model.
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
     * Creates a new Bansongprag model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bansongprag();
        $model->a13 = "โพธิ์ทอง";
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
     * Updates an existing Bansongprag model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->a13 = "โพธิ์ทอง";
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
     * Deletes an existing Bansongprag model.
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
     * Finds the Bansongprag model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bansongprag the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bansongprag::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionExport(){
    	$model = Bansongprag::find()->all();
    	$this->layout = 'empty';
    	return $this->render('export', [
    			'model' => $model,
    	]);
    }
    
    public function actionAdl(){
    	$model = Bansongprag::find()->all();
    	$this->layout = 'empty';
    	return $this->render('adl', [
    			'model' => $model,
    	]);
    }
    
    public function actionOst(){
    	$model = Bansongprag::find()->all();
    	$this->layout = 'empty';
    	return $this->render('ost', [
    			'model' => $model,
    	]);
    }
}
