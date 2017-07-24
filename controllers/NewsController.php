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
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
    //NEED TO CHANGE
    const DEFAULT_USER = 1;
    //DEFAULT CONST
    const PENDING_NEWS = 1;
    const APPROVED_NEWS = 2;
    const DISAPPROVED_NEWS = 3;
    const EDIT_PENDING_NEWS = 4;

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

        $query = News::find()->where(['status_id'=>$this::APPROVED_NEWS])->orderBy( 'crtime DESC');
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'data' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionStatus($id=0)
    {
        if($id!=0){
            $model=$this->findModel($id);
            $model->status_id=$this::APPROVED_NEWS;
            $model->save();
            Yii::$app->session->setFlash('success', "อนุมัติข่าวสำเร็จ");
        }
        $dataProvider = News::find()->where(['status_id'=>$this::PENDING_NEWS])->all();
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
        $model->status_id=$this::PENDING_NEWS;
        $model->crtime=date('Y-m-d H:i:s');
        $model->udtime=date('Y-m-d H:i:s');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', "เพิ่มข่าวสำเร็จ");
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
        $model->udtime=date('Y-m-d H:i:s');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', "แก้ไขข้อมูลสำเร็จ");
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
        $model->status_id=$this::DISAPPROVED_NEWS;
        $model->save();
        Yii::$app->session->setFlash('success', "ลบข่าวสำเร็จ");
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