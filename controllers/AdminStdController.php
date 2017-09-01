<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 6/7/2560
 * Time: 17:22
 */

namespace app\controllers;


use yii\web\Controller;

class AdminStdController extends Controller
{
    public function actionAdd()
    {
        return $this->render('add');
    }
    public function actionPermission()
    {
        return $this->render('permission');
    }
}