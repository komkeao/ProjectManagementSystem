<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 14/8/2560
 * Time: 15:15
 */

namespace app\controllers;


use yii\web\Controller;

class ExaminationController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }

}