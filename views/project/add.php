<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = 'เพิ่มโครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];

$this->params['breadcrumbs'][] = ['label' => 'โครงงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?php echo $this->title ?></h1>

<fieldset>
    <legend>ข้อมูลทั่วไป</legend>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6 col-sm-6">
                <label>ชื่อโครงงานภาษาไทย</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6 col-sm-6">
                <label>ชื่อโครงงานภาษาอังกฤษ</label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-md-6 col-sm-6">
                <label>ผู้จัดทำโครงงาน </label>
                <select id="select2" multiple="multiple" class="form-control select2" style="width: 100%">
                    <option value="">--- Select 2 ---</option>
                    <option value="1">Option 1</option>
                    <option value="2">option 2</option>
                    <option value="3">option 3</option>
                </select>
                <i class="fancy-arrow-"></i>
            </div>
            <div class="col-md-6 col-sm-6">
                <label>อาจารย์ที่ปรึกษา </label>
                <select class="form-control select2" style="width: 100%">
                    <option value="">--- Select 2 ---</option>
                    <option value="1">Option 1</option>
                    <option value="2">option 2</option>
                    <option value="3">option 3</option>
                </select>
                <i class="fancy-arrow-"></i>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6 col-sm-6">
                <label>อาจารย์ที่ปรึกษาร่วม </label>
                <select id="select2" multiple="multiple" class="form-control select2" style="width: 100%">
                    <option value="">--- Select 2 ---</option>
                    <option value="1">Option 1</option>
                    <option value="2">option 2</option>
                    <option value="3">option 3</option>
                </select>
                <i class="fancy-arrow-"></i>
            </div>

        </div>
    </div>
</fieldset>
<fieldset>
    <legend>ที่ปรึกษาภายนอก (ถ้ามี)</legend>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6 col-sm-6">
                <label>ชื่อ-นามสกุล</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6 col-sm-6">
                <label>ตำแหน่ง</label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6 col-sm-6">
                <label>หน่วยงาน</label>
                <input type="text" class="form-control">
            </div>

        </div>
    </div>
</fieldset>
<fieldset>
    <legend>รายละเอียด</legend>

    <div class="row">
        <div class="form-group">
            <div class="col-md-6 col-sm-6">
                <label>ประเภทโครงงาน </label>
                <select id="select2" multiple="multiple" class="form-control select2" style="width: 100%">
                    <option value="">--- Select 2 ---</option>
                    <option value="1">Option 1</option>
                    <option value="2">option 2</option>
                    <option value="3">option 3</option>
                </select>
                <i class="fancy-arrow-"></i>
            </div>
            <div class="col-md-6 col-sm-6">
                <label>ทฤษฎีที่เกี่ยวข้อง </label>
                <select class="form-control select2" multiple="multiple" style="width: 100%">
                    <option value="">--- Select 2 ---</option>
                    <option value="1">Option 1</option>
                    <option value="2">option 2</option>
                    <option value="3">option 3</option>
                </select>
                <i class="fancy-arrow-"></i>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6 col-sm-6">
                <label>เครื่องมือที่ใช้ </label>
                <select id="select2" multiple="multiple" class="form-control select2" style="width: 100%">
                    <option value="">--- Select 2 ---</option>
                    <option value="1">Option 1</option>
                    <option value="2">option 2</option>
                    <option value="3">option 3</option>
                </select>
                <i class="fancy-arrow-"></i>
            </div>
            <div class="col-md-6 col-sm-6">
                <label>คำค้นหา </label>
                <select class="form-control select2" multiple="multiple" style="width: 100%">
                    <option value="">--- Select 2 ---</option>
                    <option value="1">Option 1</option>
                    <option value="2">option 2</option>
                    <option value="3">option 3</option>
                </select>
                <i class="fancy-arrow-"></i>
            </div>
        </div>
    </div>
    <label>รูปภาพประกอบ </label>
    <div class="fancy-file-upload fancy-file-default">
        <i class="fa fa-upload"></i>
        <input type="file" class="form-control" name="contact[attachment]" onchange="jQuery(this).next('input').val(this.value);" />
        <input type="text" class="form-control" placeholder="no file selected" readonly="" />
        <span class="button">เลือกรูปภาพ</span>
    </div>
    <br>
    <div align="center" class="row">

        <?=Html::submitButton('บันทึกข้อมูล', ['class' => 'btn btn-success'])?>
    </div>





</fieldset>