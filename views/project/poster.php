<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'โปสเตอร์โครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="panel-misc-portlet-r2" class="panel panel-default">

    <div class="panel-heading">

        <!-- tabs nav -->
        <ul class="nav nav-tabs pull-left">
            <li class="active"><!-- TAB 1 -->
                <a href="#ttab1l_nobg" data-toggle="tab" aria-expanded="true">คำสืบค้น</a>
            </li>
            <li class=""><!-- TAB 2 -->
                <a href="#ttab2l_nobg" data-toggle="tab" aria-expanded="false">ขอบเขตของข้อมูล</a>
            </li>
        </ul>
        <!-- /tabs nav -->


    </div>

    <!-- panel content -->
    <div class="panel-body" style="display: block;">

        <!-- tabs content -->
        <div class="tab-content transparent">

            <div id="ttab1l_nobg" class="tab-pane active"><!-- TAB 1 CONTENT -->
                <div id="ttab1l_nobg" class="tab-pane active"><!-- TAB 1 CONTENT -->
                    <div class="fancy-form">
                        <i class="fa fa-search"></i>

                        <input type="tel" class="form-control" placeholder="โครงงาน Image Processing">

                        <!-- tooltip - optional, bootstrap tooltip can be used instead -->
                        <span class="fancy-tooltip top-left"> <!-- positions: .top-left | .top-right -->
		                <em>ระบุคำค้นหา!</em>
	                    </span>

                    </div>

                </div>
                <button type="button" class="btn btn-default pull-right"><i class="fa fa-search"></i>สืบค้นข้อมูล
                </button>

            </div><!-- /TAB 1 CONTENT -->

            <div id="ttab2l_nobg" class="tab-pane"><!-- TAB 2 CONTENT -->
                <div id="ttab1l_nobg" class="tab-pane active"><!-- TAB 1 CONTENT -->

                    <form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data"
                          data-success="Sent! Thank you!" data-toastr-position="top-right">
                        <fieldset>
                            <!-- required [php action request] -->
                            <input type="hidden" name="action" value="contact_send"/>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-3 col-sm-3">
                                        <label>ค้นจาก *</label>
                                        <select name="contact[position]" class="form-control pointer required">

                                            <option value="0">คำสืบค้น</option>
                                            <option value="1">รหัสโครงงาน</option>
                                            <option value="2">ชื่อโครงงาน</option>
                                            <option value="3">ชื่อผู้จัดทำ</option>
                                            <option value="4">ทฤษฎีที่เกี่ยวข้อง</option>
                                            <option value="5">เครื่องมือที่ใช้</option>

                                        </select>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <label>Keywords *</label>
                                        <input type="text" name="contact[last_name]" value=""
                                               class="form-control required">
                                    </div>
                                </div>
                            </div>

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
                                            <option value="0">ทั้งหมด</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <label>ปีการศึกษา *</label>
                                        <select name="contact[position]" class="form-control pointer required">
                                            <option value="0">ทั้งหมด</option>
                                            <option value="1">2560</option>
                                            <option value="2">2559</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <label>ประเภทโครงงาน *</label>
                                        <select id="select2" multiple="multiple" class="form-control select2" style="width: 100%">
                                            <option value="">--- Select 2 ---</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">option 2</option>
                                            <option value="3">option 3</option>
                                        </select>
                                        <i class="fancy-arrow-"></i>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>อาจารย์ที่ปรึกษา *</label>
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
                        </fieldset>

                    </form>
                    <button type="button" class="btn btn-default pull-right"><i class="fa fa-search"></i>สืบค้นข้อมูล
                    </button>
                </div>

            </div><!-- /TAB 1 CONTENT -->

        </div>
        <!-- /tabs content -->

    </div>
    <!-- /panel content -->

</div>

<div class="text-warning">
    <span><i>ผลการค้นหา</i></span>
</div>
<!--<div class="table-responsive">-->
<div class="">
    <table class="table table-bordered nomargin">
        <thead>
        <tr>
            <th>รูป</th>
            <th>รายละเอียด</th>
            <th>ข้อมูลการติดต่อ</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= Html::img('@web/images/demo/portfolio/thumb/small_a5.jpg', ['style' => 'width:100px']) ?></td>
            <td><p><b>ชื่อ :</b> รศ.ดร.ศาสตรา วงศ์ธนวสุ<br>
                    <b>สาขาวิชา :</b>วิทยาการคอมพิวเตอร์<br>
                </p></td>
            <td><p><b> ที่อยู่ : </b>ภาควิชาวิทยาการคอมพิวเตอร์คณะวิทยาศาสตร์มหาวิทยาลัย<br>
                    <b>อีเมล์ :</b> wongsar@kku.ac.th <br>
                    <b>โทรศัพท์ :</b> 0-4336-2188-90 ต่อ 320<br>
                    <b>โทรศัพท์เคลื่อนที่ :</b> <br>
                    <b>แฟกซ์ :</b> 0-4334-2910 <br>
                    <b>เว็บไซต์ :</b> <a href="http://sartra.kku.ac.th">http://sartra.kku.ac.th</a><br>
                </p></td>
        </tr>
        <tr>
            <td><?= Html::img('@web/images/demo/portfolio/thumb/small_a5.jpg', ['style' => 'width:100px']) ?></td>
            <td><p><b>ชื่อ :</b> รศ.ดร.ศาสตรา วงศ์ธนวสุ<br>
                    <b>สาขาวิชา :</b>วิทยาการคอมพิวเตอร์<br>
                </p></td>
            <td><p><b> ที่อยู่ : </b>ภาควิชาวิทยาการคอมพิวเตอร์คณะวิทยาศาสตร์มหาวิทยาลัย<br>
                    <b>อีเมล์ :</b> wongsar@kku.ac.th <br>
                    <b>โทรศัพท์ :</b> 0-4336-2188-90 ต่อ 320<br>
                    <b>โทรศัพท์เคลื่อนที่ :</b> <br>
                    <b>แฟกซ์ :</b> 0-4334-2910 <br>
                    <b>เว็บไซต์ :</b> <a href="http://sartra.kku.ac.th">http://sartra.kku.ac.th</a><br>
                </p></td>
        </tr>
        <tr>
            <td><?= Html::img('@web/images/demo/portfolio/thumb/small_a5.jpg', ['style' => 'width:100px']) ?></td>
            <td><p><b>ชื่อ :</b> รศ.ดร.ศาสตรา วงศ์ธนวสุ<br>
                    <b>สาขาวิชา :</b>วิทยาการคอมพิวเตอร์<br>
                </p></td>
            <td><p><b> ที่อยู่ : </b>ภาควิชาวิทยาการคอมพิวเตอร์คณะวิทยาศาสตร์มหาวิทยาลัย<br>
                    <b>อีเมล์ :</b> wongsar@kku.ac.th <br>
                    <b>โทรศัพท์ :</b> 0-4336-2188-90 ต่อ 320<br>
                    <b>โทรศัพท์เคลื่อนที่ :</b> <br>
                    <b>แฟกซ์ :</b> 0-4334-2910 <br>
                    <b>เว็บไซต์ :</b> <a href="http://sartra.kku.ac.th">http://sartra.kku.ac.th</a><br>
                </p>
            </td>
        </tr>
        <tr>
            <td><?= Html::img('@web/images/demo/portfolio/thumb/small_a5.jpg', ['style' => 'width:100px']) ?></td>
            <td><p><b>ชื่อ :</b> รศ.ดร.ศาสตรา วงศ์ธนวสุ<br>
                    <b>สาขาวิชา :</b>วิทยาการคอมพิวเตอร์<br>
                </p></td>
            <td><p><b> ที่อยู่ : </b>ภาควิชาวิทยาการคอมพิวเตอร์คณะวิทยาศาสตร์มหาวิทยาลัย<br>
                    <b>อีเมล์ :</b> wongsar@kku.ac.th <br>
                    <b>โทรศัพท์ :</b> 0-4336-2188-90 ต่อ 320<br>
                    <b>โทรศัพท์เคลื่อนที่ :</b> <br>
                    <b>แฟกซ์ :</b> 0-4334-2910 <br>
                    <b>เว็บไซต์ :</b> <a href="http://sartra.kku.ac.th">http://sartra.kku.ac.th</a><br>
                </p></td>
        </tr>

        </tbody>
    </table>
    <div class="text-center">
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
</div>