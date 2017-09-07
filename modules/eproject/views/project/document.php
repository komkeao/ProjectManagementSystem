<?php

/* @var $this yii\web\View */

$this->title = 'อัพโหลดเอกสารโครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .div-my{
        height:100px;
        width:100%;
        border:1px solid black;
    }

    .h1-my{
        width:30px;
        margin-top:-15px;
        margin-left:5px;
        background:white;
        font-size:20px;
    }
</style>

<h5>ขนาดเอกสารทุกชนิดไม่เกิน 70MB*</h5>
<h4>ประเภทเอกสาร</h4>
<div class="col-md-12 col-sm-12">
    <select name="contact[position]" class="form-control pointer required">
        <option value="1">Proposal</option>
        <option value="2">Progress1</option>
        <option value="1">Progress2</option>
        <option value="2">Final Report</option>
        <option value="2">User Manal</option>
        <option value="2">Poster</option>
        <option value="2">Abstact</option>
        <option value="2">เอกสารการเผยแพร่ผลงาน</option>
    </select>
</div>

<br><br>

<div class="col-md-12 col-sm-12">
    <br>
    <label  style="color: black"><b><img src="/images/word.png" alt="Smiley face" width="40px" height="100%" style="margin-bottom: -20px; margin-left : 20px;">
            <b>Word</b></label>
    <div style="border: 1px solid black; overflow: auto;   height: 50px; text-align: center; border-color: #0b0b0b;" >
    </div>
</div>



<div class="col-md-12 col-sm-12">

    <br>
    <label  style="color: black"><b><img src="/images/ppt.png" alt="Smiley face" width="40px" height="100%" style="margin-bottom: -20px; margin-left : 20px;">Power Point</b></label>
    <div style="border: 1px solid black; overflow: auto;   height: 50px; text-align: center;" >
    </div></div>

<div class="col-md-12 col-sm-12">

    <br>
    <label  style="color: black"><b><img src="/images/pdf.png" alt="Smiley face" width="40px" height="100%" style="margin-bottom: -20px;  margin-left : 20px;">PDF</b></label>
    <div style="border: 1px solid black; overflow: auto;   height: 50px; text-align: center;" >
    </div></div>
<div class="col-md-12 col-sm-12">

    <br>
    <label  style="color: black"><b><img src="/images/image.png" alt="Smiley face" width="40px" height="100%" style="margin-bottom: -20px;  margin-left : 20px;">Image</b></label>
    <div style="border: 1px solid black; overflow: auto;   height: 50px; text-align: center;" >
    </div></div>



<div class="col-md-12 col-sm-12">
    <br><label  style="color: black"><b><img src="/images/url.png" alt="Smiley face" width="40px" height="100%" style="margin-bottom: -20px;  margin-left : 20px;">URL</b></label>
<div style="border: 1px solid black; overflow: auto;   height: 50px; text-align: center;" >
</div></div>

<div class="col-md-12 col-sm-12">

    <br><button type="button" class="btn btn-3d btn-teal  pull-right" >บันทึก</button>

</div>















