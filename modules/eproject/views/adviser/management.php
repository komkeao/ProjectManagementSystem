<?php

/* @var $this yii\web\View */

$this->title = 'จัดการที่ปรึกษา';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
    <label>เรื่อง:</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>
<div>
    <label>ถึงอาจารย์:</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>

<div>
    <label>โดย:</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>

<div>
    <label>ข้อความ:</label>
    <input type="text"style="height:150px"; name="contact[last_name]" value=""
           class="form-control required">
</div>

<div>
<button type="button" class="btn btn-default pull-right"><i class="fa fa-send"></i>
    ส่ง</button>
</div>


