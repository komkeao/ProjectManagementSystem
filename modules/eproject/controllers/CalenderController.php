<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 1/9/2560
 * Time: 16:57
 */

namespace app\modules\eproject\controllers;


use yii\web\Controller;

class CalenderController extends Controller
{
    public function actionIndex(){

        return $this->render('index');
    }

}