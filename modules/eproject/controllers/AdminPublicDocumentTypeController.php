<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 6/7/2560
 * Time: 17:22
 */

namespace app\modules\eproject\controllers;


use yii\web\Controller;

class AdminPublicDocumentTypeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}