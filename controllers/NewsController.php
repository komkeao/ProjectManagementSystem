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
        $dataProvider = News::find()->where(['status_id'=>2])->all();
        return $this->render('index', [
            'data' => $dataProvider
        ]);
    }

    public function actionStatus($id=0)
    {
        if($id!=0){
            $model=$this->findModel($id);
            $model->status_id=2;
            $model->save();
        }
        $dataProvider = News::find()->where(['status_id'=>1])->all();
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
        $model->crby=1;
        $model->udby=1;
        $model->status_id=1;
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
        $model->status_id=3;
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
    public function actionUploadPost()
    {
        $model = new ForumPost;
        $gallery = new UserGallery;
        if (isset($_POST['ForumPost'], $_FILES['UserGallery'])) {
            // populate input data to $model and $gallery
            $model->attributes = $_POST['ForumPost'];
            $gallery->attributes = $_POST['UserGallery'];
            $rnd = rand(123456789, 9876543210);    // generate random number between 0123456789-9876543210
            $timeStamp = time();    // generate current timestamp
            $uploadedFile = CUploadedFile::getInstance($gallery, 'forum_image');
            if ($uploadedFile != null) {
                $fileName = "{$rnd}-{$timeStamp}-{$uploadedFile}";  // random number + Timestamp + file name
                $gallery->forum_image = $fileName;
            }
            $valid_format = "jpg,png,jpeg,gif";     // Allow the above extensions only.
            if ($gallery->save() && $valid_format) {
                if (!empty($uploadedFile)) {
                    $uploadedFile->saveAs(Yii::app()->basePath . '/../images/post/' . $fileName); // save images in given destination folder
                }
            }
            $model->save(FALSE);
        }
    }
}