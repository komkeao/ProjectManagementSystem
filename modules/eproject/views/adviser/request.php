<?php

/* @var $this yii\web\View */
$web = Yii::getAlias('@web');
$this->registerJsFile($web . '/js/fon-js.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

$this->title = 'ยื่นคำร้องที่ปรึกษา';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div></div>
<div>
    <label>ชื่อโปรเจค:</label>

    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>

<div>

    <label>ชื่อนักศึกษา:</label>

    <div id="box">


        <div class='row'>
            <div class='col-md-11 col-xs-11' style='margin-top: 5px;padding-right: 0px'>
                <input type='text' value='' class='form-control required'>
            </div>
            <div class='col-md-1 col-xs-1' style='margin-top: 5px;padding: 0px;'>
                <button id="btn2" class='btn btn-success' style='width: 80%'>เพิ่ม</button>
            </div>
        </div>


    </div></div>


<div>
    <label>หัวข้อ/เรื่องที่สนใจ:</label>

    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>

<div>
    <label>ความถนัด:</label>

    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>

<div>
    <label>เลือกอาจารย์ที่ปรึกษา:</label>

    <select multiple="multiple" class="form-control select2" style="width: 100%">

        <option value="1">อ.ดร.สายยัญ สายยศ</option>
        <option value="2">อ.ดร.นันท์นภัส เบญจมาศ</option>
        <option value="3">ผศ.ดร.พุธษดี ศิริแสงตระกูล</option>
    </select>
    <i class="fancy-arrow-"></i>
</div>


<br>
<button type="button" class="btn btn-default pull-right">ล้างฟอร์ม</button>
<button type="button" class="btn btn-default pull-right">ตกลง</button>





