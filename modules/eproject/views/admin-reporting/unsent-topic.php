<?php

/* @var $this yii\web\View */

$this->title = 'นักศึกษาที่ยังไม่ส่งหัวข้อโครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data"
      data-success="Sent! Thank you!" data-toastr-position="top-right">
    <fieldset>
        <!-- required [php action request] -->
        <input type="hidden" name="action" value="contact_send"/>

        <div class="row">
            <div class="form-group">
                <div class="col-md-6 col-sm-6">
                    <label>สาขาวิชา *</label>
                    <select name="contact[position]" class="form-control pointer required">

                        <option value="999">ทั้งหมด</option>
                        <option value="CSC">วิทยาการคอมพิวเตอร์</option>
                        <option value="ICT">เทคโนโลยีสารสนเทศ</option>
                        <option value="GIS">ภูมิสารสนเทศศาสตร์</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3">
                    <label>ภาคการศึกษา *</label>
                    <select name="contact[position]" class="form-control pointer required">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3">
                    <label>ปีการศึกษา *</label>
                    <select name="contact[position]" class="form-control pointer required">
                        <option value="1">2560</option>
                        <option value="2">2559</option>
                    </select>
                </div>


            </div>

        </div>




    </fieldset>

    <div >
        <button type="button" class="btn btn-default pull-right" ><i class="fa fa-search"></i>ตกลง</button>
    </div>
</form>
<br><br>
<div class="">
    <table class="table table-bordered nomargin">
        <thead>
        <tr>
            <th style="width: 5%">ลำดับ</th>


            <th style="width: 30%">รายชื่อนักศึกษาที่ยังไม่ส่งหัวข้อโครงงาน</th>


        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>

            <td>นางสาวคุณัญญา ยุประมี </td>



        </tr>
        <tr>
            <td>2</td>


            <td>นางสาวปภวรินท์ ศรีมีชัย</td>




        </tr>
        <tr>
            <td>3</td>


            <td>นายคมเคียว ตั้งประเสริฐ </td>


        </tr>
        <tr>
            <td>4</td>


            <td>นางสาวสีทอง สีสวย  </td>


        </tr>
        <tr>
            <td>5</td>


            <td>นายท๊อป ชัยแสง</td>


        </tr>

        </tbody>
    </table>
    <br>
    <button type="button" class="btn btn-default pull-right" >ดาวน์โหลด</button>
    <button type="button" class="btn btn-default pull-right" >สั่งพิมพ์</button>


</div>
