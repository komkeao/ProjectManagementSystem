<?php

/* @var $this yii\web\View */

$this->title = 'นักศึกษาที่ยังไม่ส่งเอกสารโครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] =['label' => 'โครงงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?php echo $this->title ?></h1>


<form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data"
      data-success="Sent! Thank you!" data-toastr-position="top-right">

    <!-- required [php action request] -->
    <input type="hidden" name="action" value="contact_send"/>

    <br>
    <div class="">
        <table class="table table-bordered nomargin">
            <thead>
            <tr>
                <th style="width: 10%">ลำดับ</th>
                <th style="width: 10%">กลุ่มที่</th>
                <th style="width: 30%">ชื่อโปรเจก</th>
                <th style="width: 30%">รายชื่อนักศึกษาที่ยังไม่ส่งเอกสารโครงงาน</th>
                <th style="width: 20%">หมายเหตุ</th>



            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>ระบบแยกขยะ</td>
                <td>นางสาวคุณัญญา ยุประมี <br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal</td>



            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>ระบบแยกใจ</td>
                <td>นางสาวปภวรินท์ ศรีมีชัย <br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal</td>


            </tr>
            <tr>
                <td>3</td>
                <td>3</td>
                <td>ระบบแยกกัน</td>
                <td>นายคมเคียว ตั้งประเสริฐ <br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal,progress1</td>



            </tr>

            <tr>
                <td>4</td>
                <td>4</td>
                <td>ระบบดูแลคนแก่</td>
                <td>นางสาวสีทอง สีสวย  <br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal,progress1</td>


            </tr>
            <tr>
                <td>5</td>
                <td>5</td>
                <td>ระบบดูแลคนเด็ก</td>
                <td>นายท๊อป ชัยแสง<br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal,progress1</td>



            </tr>


            </tbody>
        </table>
        <br>
        <button type="button" class="btn btn-default pull-right"  >ดาวน์โหลด</button>
        <button type="button" class="btn btn-default pull-right"  >สั่งพิมพ์</button>


    </div>



</form>