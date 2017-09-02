<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'details')->textarea(['rows' => 6,'class'=>'summernote form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i>บันทึกข้อมูล',['class' => 'btn btn-default pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<br/>
<br/>
