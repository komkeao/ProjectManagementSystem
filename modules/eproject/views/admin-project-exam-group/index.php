<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = 'จัดกลุ่มสอบ';
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
    <br>
    <button type="button"class="btn btn-3d btn-teal pull-right"><i class="fa fa-search"></i>ค้นข้อมูล
    </button>
</form>


<div class="">
    <br><br>
    <h3>รายชื่อชุดกรรมการกลุ่มสอบ</h3>

    <table class="table table-bordered nomargin">
        <thead>
        <tr >
            <th rowspan="2" style="width: 10%"><p align="center">ลำดับ</p></th>
            <th  rowspan="2" style="width: 10%"><p align="center">กลุ่มสอบ</th>
            <th rowspan="2" style="width: 40%"><p align="center">อ.ที่ปรึกษา</th>
            <th colspan="4" style="width: 5%"><p align="center">จำนวนกลุ่ม</th>
            <th rowspan="2" style="width: 20%"><p align="center">จำนวนโปรเจค<br>
                    ในแต่ละกลุ่มสอบ</p></th>


        </tr>



        <tr>
            <th ><p align="center">CS</p></th>
            <th><p align="center">ICT</p></th>
            <th><p align="center">GIS</p></th>
            <th ><p align="center">รวม</p></th>



        </tr>
        </thead>
        <tr>
            <td align="center">1</td>
            <td align="center">1<br><i class="fa fa-edit" style="color:blue"></i> <i class="fa fa-trash" style="color:orangered"></i></td>
            <td>อ.ดร.คำรณ สุนัติ<br>
                ผศ.ปัญญาพล หอระตะ	<br>
                รศ.ดร.ศาสตรา วงศ์ธนวสุ<br>
                ผศ.ดร.สิรภัทร เชี่ยวชาญวัฒนา </td>
            <td align="center">3<br>2<br>4<br>5 </td>
            <td align="center">2<br>1<br>1<br>0</td>
            <td align="center">0<br>0<br>0<br>0</td>
            <td align="center">5<br>3<br>5<br>5</td>
            <td align="center">18</td>


        </tr>
        <tr>
            <td align="center">2</td>
            <td align="center">2<br><i class="fa fa-edit" style="color:blue"></i> <i class="fa fa-trash" style="color:orangered"></i> </td>
            <td> 	รศ.ดร.งามนิจ อาจอินทร์<br>
                รศ.ดร.สมจิตร อาจอินทร์<br>
                ผศ.ดร.วรารัตน์ สงฆ์แป้น</td>
            <td align="center">3<br>2<br>4<br>5 </td>
            <td align="center">2<br>1<br>1<br>0</td>
            <td align="center">0<br>0<br>0<br>0</td>
            <td align="center">5<br>3<br>5<br>5</td>
            <td align="center">18</td>



        </tr>
        <tr>
            <td align="center">3</td>
            <td align="center">3 <br><i class="fa fa-edit" style="color:blue"></i> <i class="fa fa-trash" style="color:orangered"></i> </td>
            <td>อ.ดร.มัลลิกา วัฒนะ<br>
                ผศ.ดร.ธีระยุทธ ทองเครือ<br>
                ผศ.ดร.อุรฉัตร โคแก้ว </td>
            <td align="center">3<br>2<br>4<br>5 </td>
            <td align="center">2<br>1<br>1<br>0</td>
            <td align="center">0<br>0<br>0<br>0</td>
            <td align="center">5<br>3<br>5<br>5</td>
            <td align="center">18</td>



        </tr>
        <tr>
            <td></td>
            <td > </td>
            <td>รวม </td>
            <td align="center">0</td>
            <td align="center">0</td>
            <td align="center">0</td>
            <td align="center">0</td>
            <td align="center">0</td>



        </tr>


        <tbody>

        </tbody>
    </table>


</div>
 <div>
     <br><br><h3>เพิ่มอาจารย์ไปที่กลุ่มสอบ</h3>

     <div class="col-md-6 col-sm-6">
         <label>เพิ่มอาจารย์:</label>

         <select name="contact[position]" class="form-control pointer required">
             <option value="1">อ1</option>
             <option value="2">อ2</option>
         </select>
     </div>
     <div class="col-md-6 col-sm-6">
         <label>ไปยังกลุ่ม:</label>

         <select name="contact[position]" class="form-control pointer required">
             <option value="1">1</option>
             <option value="2">2</option>
         </select>
     </div><br>
     <div class="col-md-6 col-sm-6">
         <br><label>ภาคการศึกษา *</label>
         <select name="contact[position]" class="form-control pointer required">
             <option value="1">1</option>
             <option value="2">2</option>
         </select>
     </div>
     <div class="col-md-6 col-sm-6">
         <br><label>ปีการศึกษา *</label>
         <select name="contact[position]" class="form-control pointer required">
             <option value="1">2560</option>
             <option value="2">2559</option>
         </select>
     </div>




 </div>
<div class="col-md-12 col-sm-12">
    <br><button type="button" class="btn btn-3d btn-teal pull-right">บันทึก</button>
</div>


<br><br><h3>เพิ่มกลุ่มสอบ</h3>
<div class="col-md-6 col-sm-6">
    <label>ชื่อกลุ่มสอบ:</label>

    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div>
<div class="col-md-6 col-sm-6">
    <label>ชื่อกลุ่มสอบ:</label>

    <input type="text" name="contact[last_name]" value=""
           class="form-control required">
</div><br>
<div class="col-md-6 col-sm-6">
    <br><label>ภาคการศึกษา *</label>
    <select name="contact[position]" class="form-control pointer required">
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
</div>
<div class="col-md-6 col-sm-6">
    <br><label>ปีการศึกษา *</label>
    <select name="contact[position]" class="form-control pointer required">
        <option value="1">2560</option>
        <option value="2">2559</option>
    </select>
</div>




<div class="col-md-12 col-sm-12">
    <br><button type="button" class="btn btn-3d btn-teal pull-right">บันทึก</button>
</div>


 </div>


