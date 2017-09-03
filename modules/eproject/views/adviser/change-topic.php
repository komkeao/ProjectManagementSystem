<?php

/* @var $this yii\web\View */

$this->title = 'แจ้งขอเปลี่ยนหัวข้อโครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
<div>
    <label>ชื่อหัวข้อโปรเจคเดิม:</label>
    <label>ระบบรวบรวมเอกสารโครงงานและงานวิจัยคอมพิวเตอร์</label>

</div>
<div><br>
    <label>ชื่อหัวข้อโปรเจคใหม่:</label>

    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div><br>

    <div>
    <label>เหตุผลที่เปลี่ยน:</label>

    <textarea name="contact[experience]" rows="4" class="form-control required"></textarea>
</div>




<br>
<button type="button" class="btn btn-default pull-right"  >ล้างฟอร์ม</button>
<button type="button" class="btn btn-default pull-right"  >ตกลง</button>
</div>