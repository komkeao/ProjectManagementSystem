<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 4/7/2560
 * Time: 13:35
 */

namespace app\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }

}