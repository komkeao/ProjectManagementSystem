<?php

/* @var $this yii\web\View */
$web = Yii::getAlias('@web');
$this->registerJsFile( $web.'/js/fon-js.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

$this->title = 'ยื่นคำร้องที่ปรึกษา';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?php echo $this->title ?></h1>

<div class="">
    <table class="table table-bordered nomargin">

        <tr>
            <th>ชื่อโปรเจค:</th>
            <th>

                    <input type="text" name="contact[last_name]" value=""
                           class="form-control required">
               </th>




        </tr>











        <tr>
            <td>ชื่อนักศึกษา/ <button id="btn2" class="btn btn-success btn-sm">เพิ่ม</button></td>

            <td id="box">
                    <input type='text' value='' class='form-control required'>

            </td>




        </tr>

        <tr>
            <td>หัวข้อ/เรื่องที่สนใจ:</td>
            <td>

                    <input type="text" name="contact[last_name]" value=""
                           class="form-control required">
                </td>



        </tr>
        <tr>
            <td>ความถนัด:</td>
            <td> <input type="text" name="contact[last_name]" value=""
                        class="form-control required"></td>


        </tr>
        <tr>
            <td>เลือกอาจารย์ที่ปรึกษา:</td>
            <td>

                <select multiple="multiple" class="form-control select2" style="width: 100%">

                    <option value="1">อ.ดร.สายยัญ สายยศ </option>
                    <option value="2">อ.ดร.นันท์นภัส เบญจมาศ </option>
                    <option value="3">ผศ.ดร.พุธษดี ศิริแสงตระกูล </option>
                </select>
                <i class="fancy-arrow-"></i>
            </td>


        </tr>


    </table>
    <br>
    <button type="button" class="btn btn-default pull-right">ล้างฟอร์ม</button>
    <button type="button" class="btn btn-default pull-right">ตกลง</button>


</div>


