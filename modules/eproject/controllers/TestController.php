<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 4/7/2560
 * Time: 13:35
 */

namespace app\modules\eproject\controllers;



use app\modules\eproject\components\office2text\DocxConversion;
use app\modules\eproject\components\thsplitlib\Segment;
use app\modules\eproject\models\Upload;
use http\Exception;
use Smalot\PdfParser\Parser;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class TestController extends Controller
{
    const DEFAULT_USER = 1;
    public function actionIndex(){

    }
    public function actionCreate()
    {
        $model = new Upload();
        $model->crby=$this::DEFAULT_USER;
        $model->udby=$this::DEFAULT_USER;
        $model->crtime=date('Y-m-d H:i:s');
        $model->udtime=date('Y-m-d H:i:s');
        if($model->load(Yii::$app->request->post())){

            try{
                $model->image = UploadedFile::getInstance($model, 'image');
                $model->files = UploadedFile::getInstances($model, 'files'); //upload หลายไฟล์ getInstances (เติม s)
                $model->image = $model->uploadImage(); //method return ชื่อไฟล์
                $model->files = $model->uploadFiles(); //method return ชื่อไฟล์ aaaa.aaa, bbbb.bbb, ...


                $model->save();//บันทึกข้อมูล
                /*var_dump($model);
                die();*/
                Yii::$app->session->setFlash('success', 'บันทึกข้อมูลเรียบร้อย');
                return $this->redirect(['index']);
            }catch(Exception $e){
                Yii::$app->session->setFlash('danger', 'มีข้อผิดพลาด');
                return $this->redirect(['index']);
            }
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }
    public function actionFile(){
        $parser = new Parser();
        $pdf    = $parser->parseFile(Yii::getAlias('@webroot') . '/files/2.pdf');
        $text = $pdf->getText();
        $text = str_replace(" า", "ำ", $text);
        $text = str_replace(" ิว", "ิว", $text);
//        $docObj = new DocxConversion(Yii::getAlias('@webroot') . '/files/1.docx');
//        $text= $docObj->convertToText();
        $segment = new Segment();
        $result = $segment->get_segment_array($text);
        $text= implode(' | ', $result);
        return $this->render("file", ["data" => $text]);
    }
}