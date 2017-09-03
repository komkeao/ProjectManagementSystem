<?php

/* @var $this yii\web\View */

$this->title = 'โครงงานตามกลุ่มสอบ';
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
                <div class="col-md-8 col-sm-8">
                    <label>สาขาวิชา *</label>
                    <select name="contact[position]" class="form-control pointer required">

                        <option value="999">ทั้งหมด</option>
                        <option value="CSC">วิทยาการคอมพิวเตอร์</option>
                        <option value="ICT">เทคโนโลยีสารสนเทศ</option>
                        <option value="GIS">ภูมิสารสนเทศศาสตร์</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4">
                    <label>ภาคการศึกษา *</label>
                    <select name="contact[position]" class="form-control pointer required">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="col-md-8 col-sm-8">
                    <br><label>กลุ่มสอบ *</label>
                    <select name="contact[position]" class="form-control pointer required">

                        <option value="999">1</option>
                        <option value="CSC">2</option>
                        <option value="ICT">3</option>
                        <option value="GIS">4</option>
                    </select>
                </div>





                <div class="col-md-4 col-sm-4">
                    <br><label>ปีการศึกษา *</label>
                    <select name="contact[position]" class="form-control pointer required">
                        <option value="1">2560</option>
                        <option value="2">2559</option>
                    </select>
                </div>


            </div>

        </div>




    </fieldset>

    <br><div >
        <button type="button" class="btn btn-default pull-right" ><i class="fa fa-search"></i>ตกลง</button>
    </div>
</form>