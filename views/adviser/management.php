<?php

/* @var $this yii\web\View */

$this->title = 'จัดการที่ปรึกษา';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?php echo $this->title ?></h1>


<div class="col-md-9 col-sm-9">
    <label>เรื่อง</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>
<div class="col-md-9 col-sm-9">
    <label>ถึงอาจารย์</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div><div class="col-md-9 col-sm-9">
    <label>โดย</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>
<div class="col-md-9 col-sm-9">
    <label>ข้อความ</label>
    <input type="text"style="height:150px"; name="contact[last_name]" value=""
           class="form-control required">
</div>
<div class="col-md-9 col-sm-9">
<button type="button" class="btn btn-default pull-right">ส่ง</button>
</div>


