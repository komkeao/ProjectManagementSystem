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
}