<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 4/7/2560
 * Time: 13:35
 */

namespace app\controllers;


use app\models\Projects;
use app\models\ProjectType;
use app\models\Users;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex($name="test"){
        $data = "test";
        $model=Users::find()->all();
        if($model){
            $data=$model;
        }
        return $this->render('index',['data'=>$data]);
    }
    public function actionProject($name="test"){
        $data = "test";
        $model=Projects::find()->all();
        if($model){
            $data=$model;
        }
        return $this->render('index',['data'=>$data]);
    }

}