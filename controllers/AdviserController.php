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


    public function actionBroadcast(){

        return $this->render('broadcast');
    }
    public function actionChangeTopic(){

        return $this->render('change-topic');
    }
    public function actionChangeAdviser(){

        return $this->render('change-adviser');
    }
    public function actionStudentPerAdviser(){

        return $this->render('student-per-adviser');
    }

}