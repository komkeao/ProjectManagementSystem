<?php

/* @var $this yii\web\View */

$this->title = 'ทดสอบ';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
foreach ($data as $item){
    echo $item->projectType->name." ".$item->name."</br>";
}
?>



