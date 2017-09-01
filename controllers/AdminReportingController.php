<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 6/7/2560
 * Time: 17:22
 */

namespace app\controllers;


use yii\web\Controller;

class AdminReportingController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionGroup()
    {
        return $this->render('group');
    }
    public function actionAdviser()
    {
        return $this->render('adviser');
    }
    public function actionBranch()
    {
        return $this->render('branch');
    }
    public function actionProjectPerAdviser()
    {
        return $this->render('project-per-adviser');
    }
    public function actionUnsentTopic()
    {
        return $this->render('unsent-topic');
    }
    public function actionUnsentDocument()
    {
        return $this->render('unsent-document');
    }
}