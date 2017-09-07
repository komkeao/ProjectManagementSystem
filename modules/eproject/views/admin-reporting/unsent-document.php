<?php

/* @var $this yii\web\View */

$this->title = 'นักศึกษาที่ยังไม่ส่งเอกสารโครงงาน';
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
       <br> <button type="button" class="btn btn-3d btn-teal pull-right" ><i class="fa fa-search"></i>ตกลง</button>
    </div>
</form>



<br><br>

    <div class="">
        <table class="table table-bordered nomargin">
            <thead>
            <tr>
                <th style="width: 6%">ลำดับ</th>
                <th style="width: 6%">กลุ่มที่</th>
                <th style="width: 35%">ชื่อโปรเจก</th>
                <th style="width: 35%">รายชื่อนักศึกษาที่ยังไม่ส่งเอกสารโครงงาน</th>
                <th style="width: 20%">หมายเหตุ</th>



            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>ระบบแยกขยะชุมชน</td>
                <td>นางสาวคุณัญญา ยุประมี <br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal</td>



            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>ระบบช่วยเหลือคนตาบอด</td>
                <td>นางสาวปภวรินท์ ศรีมีชัย <br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal</td>


            </tr>
            <tr>
                <td>3</td>
                <td>3</td>
                <td>แอพพลิเคชันเครื่องซักผ้าออนไลน์</td>
                <td>นายคมเคียว ตั้งประเสริฐ <br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal,progress1</td>



            </tr>

            <tr>
                <td>4</td>
                <td>4</td>
                <td>แอพลิเคชันดุแลคนแก่และเด็ก</td>
                <td>นางสาวสีทอง สีสวย  <br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal,progress1</td>


            </tr>
            <tr>
                <td>5</td>
                <td>5</td>
                <td>ระบบรวบรวมเอกสารโครงงานและวิจัยคอมพิวเตอร์</td>
                <td>นายท๊อป ชัยแสง<br>นายขี้บ่น คนไม่หล่อ</td>
                <td>proposal,progress1</td>



            </tr>


            </tbody>
        </table>
        <br>
        <button type="button" class="btn btn-3d btn-teal pull-right"  >ดาวน์โหลด</button>
        <button type="button" class="btn btn-3d btn-teal pull-right"  >สั่งพิมพ์</button>


    </div>



