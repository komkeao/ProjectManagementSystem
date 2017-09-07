<?php

/* @var $this yii\web\View */

$this->title = 'แจ้งขอเปลี่ยนที่ปรึกษา';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <div>
        <label><b>ชื่อหัวข้อโปรเจคปัจจุบัน(ไทย)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบรวบรวมเอกสารโครงงานและงานวิจัยคอมพิวเตอร์</label>

    </div>
    <div>
        <label><b>ชื่อหัวข้อโปรเจคปัจจุบัน(อังกฤษ)&nbsp;:</b></label>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computer Project,Seminar And Research  Methology Management System</label>

    </div><br>
<div>
    <label><b>อาจารย์ที่ปรึกษาปัจจุบัน:</b></label>
    <label>ผศ.ดร.พุธษดี ศิริแสงตระกูล</label>
</div><br>
<div>
    <label><b>อาจารย์ที่ปรึกษาใหม่:</b></label>

    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div><br>

    <div>
    <label><b>เหตุผลที่เปลี่ยน:</b></label>

    <textarea name="contact[experience]" rows="4" class="form-control required"></textarea>
</div>




<br><button type="button" class="btn btn-3d btn-teal  pull-right"  >ล้างฟอร์ม</button>
        <button type="button" class="btn btn-3d btn-teal t pull-right"  >ตกลง</button>

</div>