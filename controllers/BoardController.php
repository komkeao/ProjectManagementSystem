<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 3/7/2560
 * Time: 23:34
 */

namespace app\controllers;


use yii\web\Controller;

class BoardController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}