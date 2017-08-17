<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 17/8/2560
 * Time: 17:07
 */

namespace app\controllers;


use yii\web\Controller;

class AdviserController extends Controller
{
    public function actionManagement(){

        return $this->render('management');
    }
    public function actionStatus(){

        return $this->render('status');
    }
    public function actionRequest(){

        return $this->render('request');
    }
    public function actionRequested(){

        return $this->render('requested');
    }
}