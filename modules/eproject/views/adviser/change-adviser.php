<?php

/* @var $this yii\web\View */

$this->title = 'แจ้งขอเปลี่ยนที่ปรึกษา';
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
    <label>อาจารย์ที่ปรึกษาปัจจุบัน:</label>
    <label>ผศ.ดร.พุธษดี ศิริแสงตระกูล</label>
</div><br>
<div>
    <label>อาจารย์ที่ปรึกษาใหม่:</label>

    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div><br>

    <div>
    <label>เหตุผลที่เปลี่ยน:</label>

    <textarea name="contact[experience]" rows="4" class="form-control required"></textarea>
</div>




<button type="button" class="btn btn-default pull-right"  >ล้างฟอร์ม</button>
        <button type="button" class="btn btn-default pull-right"  >ตกลง</button>

</div>