<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 4/7/2560
 * Time: 9:53
 */

namespace app\controllers;


use yii\web\Controller;

class ProjectController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionPoster()
    {
        return $this->render('poster');
    }
    public function actionStat()
    {
        return $this->render('stat');
    }
    public function actionAdd()
    {
        return $this->render('add');
    }
    public function actionEdit()
    {
        return $this->render('edit');
    }
    public function actionDocument()
    {
        return $this->render('document');
    }
    public function actionUnsentProjectStd()
    {
        return $this->render('unsent-project-std');
    }
    public function actionUnsentDocumentStd()
    {
        return $this->render('unsent-document-std');
    }

}