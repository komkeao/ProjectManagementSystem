<?php
/* @var $this yii\web\View */

$this->title = 'นักศึกษาที่ยังไม่เพิ่มโครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] =['label' => 'โครงงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?php echo $this->title ?></h1>

<div class="">
    <table class="table table-bordered nomargin">
        <thead>
        <tr>
            <th>ลำดับ</th>
            <th>รหัสนักศึกษา</th>
            <th>รายชื่อนักศึกษาที่ยังไม่เพิ่มโครงการ</th>


        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>573021086-0</td>
            <td>นางสาวคุณัญญา ยุประมี</td>



        </tr>
        <tr>
            <td>2</td>
            <td>573020289-3</td>
            <td>นายคมเคียว ตั้งประเสริฐ</td>



        </tr>
        <tr>
            <td>3</td>
            <td>573020236-0</td>
            <td>นางสาวปภวรินท์ ศรีมีชัย</td>


        </tr>
       <tr>
        <td>4</td>
           <td>573021023-8</td>
        <td>นางสาวสีทอง สีสวย</td>


        </tr>
        <tr>
        <td>5</td>
            <td>573021968-4</td>
        <td>นายท๊อป ชัยแสง</td>


        </tr>
        </tr>
        <tr>
            <td>6</td>
            <td>573021986-5</td>
            <td>นางสาวจังโก๊ะ นามาตาริซัง</td>


        </tr>
        <tr>
            <td>7</td>
            <td>573021698-0</td>
            <td>นางสาวดำ สวยซัง</td>


        </tr>
        </tbody>
    </table>
<br>
    <button type="button" class="btn btn-default pull-right">ดาวน์โหลด</button>
    <button type="button" class="btn btn-default pull-right">สั่งพิมพ์</button>


    </div>
