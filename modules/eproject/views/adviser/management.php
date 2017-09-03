<?php

/* @var $this yii\web\View */

$this->title = 'จัดการที่ปรึกษา';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
<div>
    <label>เรื่อง:</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div><br>
<div>
    <label>ถึงอาจารย์:</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div><br>

<div>
    <label>โดย:</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div><br>

<div>
    <label>ข้อความ:</label>
    <textarea name="contact[experience]" rows="4" class="form-control required"></textarea>
</div><br>

<div>
<button type="button" class="btn btn-default pull-right"><i class="fa fa-send"></i>
    ส่ง</button>
</div>


</div>