<?php

/* @var $this yii\web\View */

$this->title = 'แจ้งขอเปลี่ยนหัวข้อโครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
<div>
        <label>ชื่อหัวข้อโปรเจคปัจจุบัน(ไทย):</label>
        <label>ระบบรวบรวมเอกสารโครงงานและงานวิจัยคอมพิวเตอร์</label>

    </div><br>
    <div>
        <label>ชื่อหัวข้อโปรเจคปัจจุบัน(อังกฤษ):</label>
        <label>Computer Project,Seminar And Research  Methology Management System</label>

    </div><br>
<div>
    <label>ชื่อหัวข้อโปรเจคใหม่(ไทย):</label>

    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div><br>
    <div>
        <label>ชื่อหัวข้อโปรเจคใหม่(อังกฤษ):</label>

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