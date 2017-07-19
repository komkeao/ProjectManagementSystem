<?php
//หากมี fileInput form จะสร้าง enctype="multipart/form-data ให้อัตโนมัตินะ (v2.0.8)
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin()?>

<?=$form->field($model, 'title')?>

<?=$form->field($model, 'file')->fileInput()?>

<?=Html::submitButton('บันทึกข้อมูล', ['class' => 'btn btn-success'])?>

<?php ActiveForm::end()?>