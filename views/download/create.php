<?php

/* @var $this yii\web\View */

$this->title = 'เพิ่มไฟล์';
$this->params['breadcrumbs'][] = ['label' => 'ข่าวสาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?=$this->render('_form', [
    'model' => $model
])?>


