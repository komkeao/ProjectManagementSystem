<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 6/7/2560
 * Time: 17:22
 */

namespace app\controllers;


use yii\web\Controller;

class AdminProjectExamGroupController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}