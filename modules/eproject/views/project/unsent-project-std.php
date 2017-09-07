<?php
/* @var $this yii\web\View */

$this->title = 'นักศึกษาที่ยังไม่เพิ่มโครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] =['label' => 'โครงงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h3><?php echo $this->title ?></h3>

<div class="">
    <table class="table table-bordered nomargin">
        <thead>
        <tr>
            <th style="width:3%">ลำดับ</th>


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
    <button type="button" class="btn btn-3d btn-teal pull-right" >ดาวน์โหลด</button>
    <button type="button" class="btn btn-3d btn-teal pull-right" >สั่งพิมพ์</button>


</div>

