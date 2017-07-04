<?php
/**
 * Created by PhpStorm.
 * User: MainUser
 * Date: 4/7/2560
 * Time: 10:00
 */

namespace app\controllers;


use yii\web\Controller;

class PersonnelController extends Controller
{
    public function actionTeachers()
    {
        return $this->render('teachers');
    }
}