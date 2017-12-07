<?php

namespace backend\controllers;

use Yii;
use backend\models\Bansanguan;
use backend\models\SearchBansanguan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BanhuakooController implements the CRUD actions for Banhuakoo model.
 */
class BansanguanController extends Controller
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
     * Lists all Banhuakoo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchBansanguan();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banhuakoo model.
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
     * Creates a new Banhuakoo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bansanguan();
        $model->a13 = "สระแก้ว";
        $model->a14 = "ท่าศาลา";
        $model->a15 = "นครศรีธรรมราช";
        $model->d1 = "2";
        $model->d2 = "2";
        $model->d3 = "2";
        $model->d4 = "2";
        $model->d5 = "2";
        $model->d6 = "2";
        $model->d7 = "2";
        $model->d8 = "2";
        $model->d9 = "2";
        $model->d10 = "2";

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//             return $this->redirect(['view', 'id' => $model->id]);
			$name = $model->a27;
			$lname = $model->a28;
			$village = $model->a10;
        	$model = new Bansanguan();
        	$model->a13 = "สระแก้ว";
        	$model->a14 = "ท่าศาลา";
        	$model->a15 = "นครศรีธรรมราช";
        	$model->d1 = "2";
	        $model->d2 = "1";
	        $model->d3 = "3";
	        $model->d4 = "2";
	        $model->d5 = "3";
	        $model->d6 = "2";
	        $model->d7 = "2";
	        $model->d8 = "1";
	        $model->d9 = "2";
	        $model->d10 = "2";
	        $model->a24 = "ไม่สูบ";
	        $model->a25 = "ไม่ดื่ม";
        	$model->a10 = $village;
        	$model->a27 = $name;
        	$model->a28 = $lname;
        	return $this->render('create', [
        			'model' => $model,
        	]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Bansanguan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->a13 = "สระแก้ว";
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
     * Deletes an existing Bansanguan model.
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
     * Finds the Bansanguan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bansanguan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bansanguan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionExport(){
    	$model = Bansanguan::find()->all();
    	$this->layout = 'empty';
    	return $this->render('export', [
    			'model' => $model,
    	]);
    }
    
    public function actionAdl(){
    	$model = Bansanguan::find()->all();
    	$this->layout = 'empty';
    	return $this->render('adl', [
    			'model' => $model,
    	]);
    }
    
    public function actionOst(){
    	$model = Bansanguan::find()->all();
    	$this->layout = 'empty';
    	return $this->render('ost', [
    			'model' => $model,
    	]);
    }
}
