<?php

/* @var $this yii\web\View */

$this->title = 'กรอกประวัติที่ปรึกษา';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div>
    <label>อาจารย์:</label>
    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>

<div>
<label <label>สาขา:</label>
    <select multiple="multiple" class="form-control select2" style="width: 100%">

        <option value="1">CS</option>
        <option value="2">ICT</option>
        <option value="3">GIS</option>
    </select>
    <i class="fancy-arrow-"></i>

</div>


<div>
    <label>ความชำนาญการ:</label>
    <input type="text"style="height:150px"; name="contact[last_name]" value=""
           class="form-control required">
</div>

<div>
<label>รับจำนวน:</label>
<input type="text" name="contact[last_name]" value=""
       class="form-control required">
</div>

<div>
<label>สามารถติดต่อ:</label>
<input type="text" name="contact[last_name]" value=""
       class="form-control required">
</div>
<div>
    <button type="button" class="btn btn-default pull-right" style="width: 10%">ส่ง</button>
</div>





