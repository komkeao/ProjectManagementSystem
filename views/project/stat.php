<?php

/* @var $this yii\web\View */

$this->title = 'ภาพรวมสถิติโครงงาน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?php echo $this->title ?></h1>
<div id="panel-misc-portlet-r2" class="panel panel-default">

    <div class="panel-heading">

        <!-- tabs nav -->
        <ul class="nav nav-tabs pull-left">
            <li class="active"><!-- TAB 1 -->
                <a href="#ttab1l_nobg" data-toggle="tab" aria-expanded="true">ตามประเภทโครงงาน</a>
            </li>
            <li class=""><!-- TAB 2 -->
                <a href="#ttab2l_nobg" data-toggle="tab" aria-expanded="false">ตามประเภทโครงงานและสาขา</a>
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
                    <form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data"
                          data-success="Sent! Thank you!" data-toastr-position="top-right">
                        <fieldset>
                            <!-- Collapsible -->
                            <div id="panel-misc-portlet-r1" class="panel panel-clean">

                                <div class="panel-heading">
                                 <span class="elipsis"><strong>ปีการศึกษา</strong>
                             </span>

                                </div>

                                <!-- panel content -->
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6">
                                                <label>(จาก)ปีการศึกษา</label>
                                                <select name="contact[position]" class="form-control pointer required">
                                                    <option value="0">ทั้งหมด</option>
                                                    <option value="1">2559</option>
                                                    <option value="2">2560</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <label>(ถึง)ปีการศึกษา</label>
                                                <select name="contact[position]" class="form-control pointer required">
                                                    <option value="0">ทั้งหมด</option>
                                                    <option value="1">2559</option>
                                                    <option value="2">2560</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /panel content -->

                            </div>
                            <!-- /Collapsible -->
                            <!-- Collapsible -->
                            <div id="panel-misc-portlet-r1" class="panel panel-clean">

                                <div class="panel-heading">
                                 <span class="elipsis"><strong>ประเภทโครงงาน</strong>
                             </span>

                                </div>

                                <!-- panel content -->
                                <div class="panel-body">
                                    <!-- checkbox -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Hardware
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Network
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Mobile Application
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Web Application
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Database Application
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /panel content -->

                            </div>
                            <!-- /Collapsible -->


                        </fieldset>
                        <button type="button" class="btn btn-default pull-right"><i class="fa fa-bar-chart-o"></i>แสดงสถิติ
                        </button>
                    </form>
                    <br><br>
                    <!-- Bar Chart Horizontal -->
                    <div id="panel-graphs-flot-1" class="panel panel-default">

                        <div class="panel-heading">

									<span class="elipsis"><!-- panel title -->
										<strong>Bar Chart</strong>
									</span>
                        </div>

                        <!-- panel content -->
                        <div class="panel-body nopadding">

                            <div id="flot-bar-horizontal" class="flot-chart"><!-- FLOT CONTAINER --></div>

                        </div>
                        <!-- /panel content -->

                    </div>
                    <!-- /Bar Chart Horizontal -->

                </div>
            </div><!-- /TAB 1 CONTENT -->

            <div id="ttab2l_nobg" class="tab-pane"><!-- TAB 2 CONTENT -->
                <div id="ttab1l_nobg" class="tab-pane active"><!-- TAB 1 CONTENT -->

                    <form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data"
                          data-success="Sent! Thank you!" data-toastr-position="top-right">
                        <fieldset>
                            <!-- required [php action request] -->
                            <input type="hidden" name="action" value="contact_send"/>

                            <!-- Collapsible -->
                            <div id="panel-misc-portlet-r1" class="panel panel-clean">

                                <div class="panel-heading">
                                 <span class="elipsis"><strong>ปีการศึกษา</strong>
                             </span>

                                </div>

                                <!-- panel content -->
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6">
                                                <label>(จาก)ปีการศึกษา</label>
                                                <select name="contact[position]" class="form-control pointer required">
                                                    <option value="0">ทั้งหมด</option>
                                                    <option value="1">2559</option>
                                                    <option value="2">2560</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <label>(ถึง)ปีการศึกษา</label>
                                                <select name="contact[position]" class="form-control pointer required">
                                                    <option value="0">ทั้งหมด</option>
                                                    <option value="1">2559</option>
                                                    <option value="2">2560</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /panel content -->

                            </div>
                            <!-- /Collapsible -->
                            <!-- Collapsible -->
                            <div id="panel-misc-portlet-r1" class="panel panel-clean">

                                <div class="panel-heading">
                                 <span class="elipsis"><strong>สาขา</strong>
                             </span>

                                </div>

                                <!-- panel content -->
                                <div class="panel-body">
                                    <!-- checkbox -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> วิทยาการคอมพิวเตอร์
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> เทคโนโลยีสารสนเทศ
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> ภูมิสารสนเทศศาสตร์
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /panel content -->

                            </div>
                            <!-- /Collapsible -->
                            <!-- Collapsible -->
                            <div id="panel-misc-portlet-r1" class="panel panel-clean">

                                <div class="panel-heading">
                                 <span class="elipsis"><strong>ประเภทโครงงาน</strong>
                             </span>

                                </div>

                                <!-- panel content -->
                                <div class="panel-body">
                                    <!-- checkbox -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Hardware
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Network
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Mobile Application
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Web Application
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="1">
                                                    <i></i> Database Application
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /panel content -->

                            </div>
                            <!-- /Collapsible -->
                        </fieldset>
                        <button type="button" class="btn btn-default pull-right"><i class="fa fa-bar-chart-o"></i>แสดงสถิติ
                        </button>
                    </form>
                    <br><br>

                    <!-- Bar Chart Horizontal -->
                    <div id="panel-graphs-flot-1" class="panel panel-default">

                        <div class="panel-heading">

									<span class="elipsis"><!-- panel title -->
										<strong>Bar Chart</strong>
									</span>
                        </div>

                        <!-- panel content -->
                        <div class="panel-body nopadding">

                            <div id="flot-bar-horizontal" class="flot-chart"><!-- FLOT CONTAINER --></div>

                        </div>
                        <!-- /panel content -->

                    </div>
                    <!-- /Bar Chart Horizontal -->

                </div>

            </div><!-- /TAB 1 CONTENT -->

        </div>
        <!-- /tabs content -->

    </div>
    <!-- /panel content -->

</div>
