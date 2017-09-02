<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'รันหมายเลขโครงงาน';
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
                    <select id="select2" multiple="multiple" class="form-control select2"
                            style="width: 100%">
                        <option value="">--- Select 2 ---</option>
                        <option value="1">Option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                    </select>
                    <i class="fancy-arrow-"></i>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label>เรียงตาม *</label>
                    <select multiple="multiple" class="form-control select2" style="width: 100%">
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
                    <label>บันทึกตาม *</label>
                    <select name="contact[position]" class="form-control pointer required">

                        <option value="CSC">รหัสที่กรอดกในตาราง</option>
                        <option value="ICT">ตามลำดับในตาราง</option>
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
    <?= Html::submitButton('<i class="fa fa-save"></i>สร้างรายงาน',['class' => 'btn btn-default pull-right']) ?>
</form>