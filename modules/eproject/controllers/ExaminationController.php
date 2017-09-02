<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 14/8/2560
 * Time: 15:15
 */

namespace app\modules\eproject\controllers;


use yii\web\Controller;

class ExaminationController extends Controller
{

    public function actionIndex(){
        return $this->render('index');
    }


    public function actionSchedule(){
        return $this->render('schedule');
    }

    public function actionGradeCalculation(){
        return $this->render('grade-calculation');
    }


    public function actionManageGroup(){
        return $this->render('manage-group');
    }


    public function actionExamSchedule(){
        return $this->render('exam-schedule');
    }

    public function actionExamScore(){
        return $this->render('exam-score');
    }
    public function actionBoard(){
        return $this->render('board');
    }

    public function actionReport(){
        return $this->render('report');
    }



}