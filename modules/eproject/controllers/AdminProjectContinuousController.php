<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 6/7/2560
 * Time: 17:22
 */

namespace app\modules\eproject\controllers;


use yii\web\Controller;

class AdminProjectContinuousController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}