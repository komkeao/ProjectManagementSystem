<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 5/7/2560
 * Time: 16:48
 */

namespace app\controllers;


use app\models\News;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
    const DEFAULT_USER = 1;
    const PENDING_NEWS_STATUS = 1;
    const APPROVED_NEWS_STATUS = 2;
    const DISAPPROVED_NEWS_STATUS = 3;
    const EDIT_PENDING_NEWS_STATUS = 4;

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
    public function actionIndex()
    {
        $dataProvider = News::find()->where(['status_id'=>$this::APPROVED_NEWS_STATUS])->all();
        return $this->render('index', [
            'data' => $dataProvider
        ]);
    }

    public function actionStatus($id=0)
    {
        if($id!=0){
            $model=$this->findModel($id);
            $model->status_id=$this::APPROVED_NEWS_STATUS;
            $model->save();
        }
        $dataProvider = News::find()->where(['status_id'=>$this::PENDING_NEWS_STATUS])->all();
        return $this->render('status', [
            'data' => $dataProvider
        ]);
    }



    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }



    public function actionCreate()
    {
        $model = new News();
        $model->crby=$this::DEFAULT_USER;
        $model->udby=$this::DEFAULT_USER;
        $model->status_id=$this::PENDING_NEWS_STATUS;
        $model->crtime=date("Y-m-d H:i");
        $model->udtime=date("Y-m-d H:i");
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }



    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->udtime=date("Y-m-d H:i");
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $model=$this->findModel($id);
        $model->status_id=$this::DISAPPROVED_NEWS_STATUS;
        $model->save();
        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}