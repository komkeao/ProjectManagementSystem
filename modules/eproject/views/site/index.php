<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\timeago\TimeAgo;

$this->title = 'หน้าหลัก';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Collapsible -->
<div id="panel-misc-portlet-r1" class="panel panel-clean">

    <div class="panel-heading">
            <span class="elipsis"><!-- panel title --><span class="fa fa-newspaper-o"></span>
             <strong>ข่าวสาร</strong>
            </span>


        <!-- right options -->
        <ul class="options pull-right list-inline">
            <li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse"
                   data-placement="bottom"></a></li>
        </ul>
        <!-- /right options -->

    </div>

    <!-- panel content -->
    <div class="panel-body">

        <?php
        foreach ($data as $item) { ?>
            <a href="<?php echo Url::toRoute(['news/view', 'id' => $item->id]);?>">
                <div class="alert alert-bordered-dotted margin-bottom-3 padding-3"><!-- DEFAULT -->
                    <strong> <?php echo $item->title;?> </strong>
                    <span style="color: black">- โดย <?php echo $item->crby?> (<i><?php echo TimeAgo::widget(['timestamp' => $item->crtime."GMT+7", 'language' => 'th']) ?></i>)</span>
                </div>
            </a>
        <?php } ?>

    </div>
    <!-- /panel content -->

</div>
<!-- /Collapsible -->
<!-- Collapsible -->
<div id="panel-misc-portlet-r1" class="panel panel-clean">

    <div class="panel-heading">
        <span class="elipsis"><span class="fa fa-commenting-o"></span></span> <strong>เว็บบอร์ด</strong></span>
        <!-- right options -->
        <ul class="options pull-right list-inline">
            <li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse"
                   data-placement="bottom"></a></li>
        </ul>
        <!-- /right options -->
    </div>

    <!-- panel content -->
    <div class="panel-body">


        <a href="#">
            <div class="alert alert-bordered-dotted margin-bottom-3 padding-3"><!-- DEFAULT -->
                <strong> กำหนดวันสอบ Midterm (ความก้าวหน้าครั้งที่ 2)</strong>
                <span style="color: black">- โดย ชิตสุธา สุ่มเล็ก (2015-03-02 12:09:33)</span>

            </div>
        </a>

        <a href="site/index">
            <div class="alert alert-bordered-dotted margin-bottom-3 padding-3"><!-- DEFAULT -->
                <strong >  การส่งเอกสารก่อนสอบ Midterm 2557 </strong>
                <span style="color: black">- โดย ชิตสุธา สุ่มเล็ก (2015-03-02 12:09:33)</span>
            </div>
        </a>

    </div>
    <!-- /panel content -->

</div>
<!-- /Collapsible -->
<!-- /LEFT -->


