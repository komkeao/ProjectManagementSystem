<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 5/7/2560
 * Time: 16:48
 */

namespace app\controllers;


use app\models\Download;
use Yii;
use yii\base\Exception;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class DownloadController extends Controller
{
    const DEFAULT_USER = 1;
    public function actionIndex()
    {
        $query = Download::find()->orderBy( 'crtime DESC');
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
    public function actionCreate()
    {
        $model = new Download();
        $model->crby=$this::DEFAULT_USER;
        $model->udby=$this::DEFAULT_USER;
        $model->crtime=date('Y-m-d H:i:s');
        $model->udtime=date('Y-m-d H:i:s');
        if($model->load(Yii::$app->request->post())){
            try{
                $model->file = UploadedFile::getInstance($model, 'file');
                $model->file = $model->uploadFile(); //method return ชื่อไฟล์
                $model->save();//บันทึกข้อมูล
                Yii::$app->session->setFlash('success', 'บันทึกข้อมูลเรียบร้อย');
                return $this->redirect(['index']);
            }catch(Exception $e){
                Yii::$app->session->setFlash('danger', 'มีข้อผิดพลาด');
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if($model->load(Yii::$app->request->post())){
            try{
                $model->udtime=date("Y-m-d H:i");
                $model->file = UploadedFile::getInstance($model, 'file');//upload หลายไฟล์ getInstances (เติม s)
                $model->file = $model->uploadFile();//method return ชื่อไฟล์ aaaa.aaa, bbbb.bbb,
                $model->save();//บันทึกข้อมูล
                Yii::$app->session->setFlash('success', 'บันทึกข้อมูลเรียบร้อย');
                return $this->redirect(['index']);
            }catch(Exception $e){
                Yii::$app->session->setFlash('danger', 'มีข้อผิดพลาด');
                return $this->redirect(['sss']);
            }
        }
        return $this->render('update', [
            'model' => $model
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Download::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}