<?php

/* @var $this yii\web\View */

$this->title = 'ทดสอบ';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?=$this->render('_form', [
    'model' => $model
])?>


