<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 5/7/2560
 * Time: 16:48
 */

namespace app\controllers;


use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAdd()
    {
        return $this->render('add');
    }
}