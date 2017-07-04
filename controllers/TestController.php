<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 4/7/2560
 * Time: 13:35
 */

namespace app\controllers;


use app\models\Users;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
        $data = "test";
        $model=Users::findAll("1==1");
        if($model){
            $data=$model;


        }
        return $this->render('index',['data'=>$data]);
    }

}