<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\bootstrap\Alert;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$userType = 3;
//0 admin
//1 teachers
//2 student
//3 guest
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>

    <!-- WEB FONTS -->
    <link href="" rel="stylesheet" type="text/css"/>

</head>
<body class="smoothscroll enable-animation">
<?php $this->beginBody() ?>
<!--  ASIDE -->

<aside id="aside">
    <nav id="sideNav"><!-- MAIN MENU -->

        <?php echo Menu::widget([
            'items' => [
                ['label' => '<i class="main-icon fa fa-home"></i> <span>หน้าหลัก</span>', 'url' => ['site/index']],
                ['label' => '<i class="main-icon fa fa-newspaper-o"></i> <span>ข่าวสาร</span>', 'url' => ['news/index'], 'visible' => $userType >= 2],
                ['label' => '<i class="fa fa-menu-arrow pull-right"></i><i class="main-icon fa fa-newspaper-o"></i> <span>ข่าวสาร</span>',
                    'template' => '<a href="#">{label}</a>',
                    'url' => ['#'], 'visible' => $userType == 1 || $userType == 0, 'items' => [
                    ['label' => 'ฟีด', 'url' => ['news/index']],
                    ['label' => 'เพิ่มข่าว', 'url' => ['news/create']],
                    ['label' => 'การอนุมัติ', 'url' => ['news/status']],
                ]],
                ['label' => '<i class="fa fa-menu-arrow pull-right"></i><i class="main-icon fa fa-file-text-o"></i> <span>โครงงาน</span>',
                    'template' => '<a href="#">{label}</a>',
                    'url' => ['#'], 'items' => [
                    ['label' => 'รายชื่อโครงงาน', 'url' => ['project/index']],
                    ['label' => 'นักศึกษาที่ยังไม่เพิ่มโครงงาน', 'url' => ['project/unsent-project-std']],
                    ['label' => 'นักศึกษาที่ยังไม่ส่งเอกสารโครงงาน', 'url' => ['project/unsent-document-std']],
                    ['label' => 'เพิ่มโครงงาน', 'url' => ['project/add'], 'visible' => $userType == 2],
                    ['label' => 'แก้ไขข้อมูลโครงงาน', 'url' => ['project/edit'], 'visible' => $userType == 2],
                    ['label' => 'อัพโหลดเอกสารโครงงาน', 'url' => ['project/document'], 'visible' => $userType == 2],
//                    ['label' => 'รายชื่อกรรมการสอบ', 'url' => ['project/stat'], 'visible' => $userType <= 1],
                ]], ['label' => '<i class="fa fa-menu-arrow pull-right"></i><i class="main-icon fa fa-user"></i> <span>ที่ปรึกษาโครงงาน</span>', 'template' => '<a href="#">{label}</a>', 'items' => [
                    ['label' => 'ยื่นคำร้องที่ปรึกษา', 'url' => ['adviser/request'], 'visible' => $userType == 2],
                    ['label' => 'คำร้องที่ปรึกษา', 'url' => ['adviser/requested'], 'visible' => $userType == 1],

                    ['label' => 'ประกาศหาที่ปรึกษา', 'url' => ['adviser/broadcast'], 'visible' => $userType == 1],
                    ['label' => 'แจ้งขอเปลี่ยนหัวข้อโครงงาน', 'url' => ['adviser/change-topic'], 'visible' => $userType == 2],
                    ['label' => 'แจ้งขอเปลี่ยนที่ปรึกษา', 'url' => ['adviser/change-adviser'], 'visible' => $userType == 2],
                    ['label' => 'สถานะที่ปรึกษา', 'url' => ['adviser/student-per-adviser']],

                    ['label' => 'จัดการที่ปรึกษา', 'url' => ['adviser/management'], 'visible' => $userType <=2],
                ]], ['label' => '<i class="fa fa-menu-arrow pull-right"></i><i class="main-icon fa fa-users"></i> <span>กลุ่มสอบ</span>', 'template' => '<a href="#">{label}</a>', 'items' => [
                    /*['label' => 'ตารางงาน', 'url' => ['examination/schedule'], 'visible' => $userType == 1],
                    ['label' => 'คำนวนเกรด', 'url' => ['examination/grade-calculation'], 'visible' => $userType == 0],
                    ['label' => 'จัดกลุ่มสอบ', 'url' => ['examination/manage-group'], 'visible' => $userType == 0],
                    ['label' => 'ตารางสอบ', 'url' => ['examination/exam-schedule'], 'visible' => $userType <=2],
                    ['label' => 'ให้คะแนนสอบ', 'url' => ['examination/exam-score'], 'visible' => $userType <=1],*/
                    ['label' => 'กรรมการสอบ', 'url' => ['examination/board']],
                    //['label' => 'ออกรายงาน', 'url' => ['examination/report'], 'visible' => $userType == 0]
                ]],


                ['label' => '<i class="main-icon fa fa-calendar-minus-o"></i> <span>ปฏิทิน</span>', 'url' => ['calender/index']],


                ['label' => '<i class="main-icon fa fa-download"></i>  <span>ดาวน์โหลด</span>', 'url' => ['download/index']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
            ],
            'encodeLabels' => false,
            'activateParents' => true,
            'options' => [
                'class' => 'nav nav-list',
            ]
        ]);
        if ($userType == 0) {
            ?>
            <h3>ผู้ดูแลระบบ</h3>
            <?php
            echo Menu::widget([
                'items' => [
                    ['label' => '<i class="main-icon fa fa-unlock-alt"></i> <span>การจัดการสิทธิ์</span>', 'url' => ['admin-permission/index']],
                    ['label' => '<i class="fa fa-menu-arrow pull-right"></i><i class="main-icon fa fa-male"></i> <span>นักศึกษา</span>',
                        'template' => '<a href="#">{label}</a>',
                        'url' => ['#'], 'items' => [
                        ['label' => 'นำเข้ารายชื่อนักศึกษา', 'url' => ['admin-std/add']],
//                        ['label' => 'จัดการสิทธิ์', 'url' => ['admin-std/permission']],
                    ]],
                    ['label' => '<i class="fa fa-menu-arrow pull-right"></i><i class="main-icon fa fa fa-tasks"></i> <span>โครงงาน</span>',
                        'template' => '<a href="#">{label}</a>',
                        'url' => ['#'], 'items' => [
                        ['label' => 'ประเภทโครงงาน', 'url' => ['admin-project-type/index']],
                        ['label' => 'โครงงานต่อเนื่อง', 'url' => ['admin-project-continuous/index']],
                        ['label' => 'จัดกลุ่มสอบ', 'url' => ['admin-project-exam-group/index']],
                        ['label' => 'รันหมายเลขโครงงาน', 'url' => ['admin-project-running/index']],
                        ['label' => 'ประเภทเอกสารการเผยแพร่ผลงาน', 'url' => ['admin-public-document-type/index']],
                    ]],
                    ['label' => '<i class="fa fa-menu-arrow pull-right"></i><i class="main-icon fa fa-sticky-note"></i> <span>ออกรายงาน</span>',
                        'template' => '<a href="#">{label}</a>',
                        'url' => ['#'], 'items' => [
                        ['label' => 'หัวข้อโครงงาน/อาจารย์ที่ปรึกษา/ปีการศึกษา', 'url' => ['admin-reporting/index']],
                        ['label' => 'โครงงานตามกลุ่มสอบ', 'url' => ['admin-reporting/group']],
                        ['label' => 'โครงงานตามที่ปรึกษา', 'url' => ['admin-reporting/adviser']],
                        ['label' => 'โครงงานตามสาขา', 'url' => ['admin-reporting/branch']],
                        ['label' => 'โครงงานต่ออาจารย์ที่ปรึกษา', 'url' => ['admin-reporting/project-per-adviser']],
                        ['label' => 'นักศึกษาที่ไม่ส่งหัวข้อโครงงาน', 'url' => ['admin-reporting/unsent-topic']],
                        ['label' => 'นักศึกษาที่ยังไม่ส่งเอกสารโครงงาน', 'url' => ['admin-reporting/unsent-document']],
                    ]]
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
                'encodeLabels' => false,
                'activateParents' => true,
                'options' => [
                    'class' => 'nav nav-list',
                ]
            ]);
        } ?>
    </nav>
    <span id="asidebg"><!-- aside fixed background --></span>
</aside>
<!-- END ASIDE -->


<div id="wrapper">
    <!-- HEADER -->
    <header id="header">

        <!-- Mobile Button -->
        <button id="mobileMenuBtn"></button>

        <!-- Logo -->
        <span class="logo pull-left" style="font-size:x-large;color: lightgoldenrodyellow">
            E-Project
            <!--					<img src="/images/logo_light.png" alt="admin panel" height="35"/>-->
				</span>

        <!-- SEARCH -->
        <form method="get" action="page-search.html" class="search pull-left hidden-xs">
            <input type="text" class="form-control" name="k" placeholder="Search for something..."/>
        </form>

        <nav>
            <!-- END SEARCH -->

            <!-- OPTIONS LIST -->
            <ul class="nav pull-right">

                <!-- USER OPTIONS -->
                <li class="dropdown pull-left">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <img class="user-avatar" alt="" src="/images/noavatar.jpg" height="34"/>
                        <span class="user-name">
									<span class="hidden-xs">
										คมเคียว <i class="fa fa-angle-down"></i>
									</span>
								</span>
                    </a>
                    <ul class="dropdown-menu hold-on-click">
                        <li><!-- my calendar -->
                            <a href="calendar.html"><i class="fa fa-calendar"></i> ตารางนัดหมาย</a>
                        </li>
                        <li><!-- my inbox -->
                            <a href="#"><i class="fa fa-envelope"></i> การแจ้งเตือน
                                <span class="pull-right label label-default">0</span>
                            </a>
                        </li>
                        <li><!-- settings -->
                            <a href="page-user-profile.html"><i class="fa fa-cogs"></i> แก้ไขข้อมูลส่วนตัว</a>
                        </li>

                        <li class="divider"></li>

                        <li><!-- logout -->
                            <a href="page-login.html"><i class="fa fa-power-off"></i> ออกจากระบบ</a>
                        </li>
                    </ul>
                </li>
                <!-- /USER OPTIONS -->
            </ul>
            <!-- /OPTIONS LIST -->
        </nav>
    </header>
    <!-- /HEADER -->

    <!-- MIDDLE -->
    <section id="middle">
        <!-- page title -->
        <header id="page-header">
            <?php if (Yii::$app->session->hasFlash('alert')): ?>
                <?= \yii\bootstrap\Alert::widget([
                    'body' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                    'options' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
                ]) ?>
            <?php endif; ?>
            <h1><?= Html::encode($this->title) ?></h1>

            <?= Breadcrumbs::widget([
                //'itemTemplate'=>"<li><i>{link}</i></li>\n",
                'homeLink' => [
                    'label' => Yii::t('yii', 'หน้าหลัก'),
                    'url' => Yii::$app->homeUrl,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [[
                    'label' => '',
                    'url' => ['site/index'],
                    'template' => "<li><b>{link}</b></li>\n", // template for this link only
                ]]
            ]) ?>

        </header>
        <div id="content" class="padding-20">

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="row">
                        <?php $this->render('/layouts/alert') ?>
                        <!-- LEFT -->
                        <div class="col-md-12">

                            <?= $content ?>


                        </div>
                        <!-- END LEFT -->
                        <!-- RIGHT -->
<!--                        <div class="col-md-3 sidebar">-->
<!--                            --><?php //$this->beginContent('@app/views/fragments/rightPanel.php'); ?>
<!--                            --><?php //$this->endContent(); ?>
<!--                        </div>-->
                    </div>
                    <!-- END RIGHT -->
                </div>
            </div>
        </div>

    </section>
    <!-- END MIDDLE -->

</div>
<!---->
<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--                <p class="pull-left">&copy; My Company --><? // //= date('Y') ?><!--</p>-->
<!---->
<!--                <p class="pull-right">--><? // //= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->
<?php $this->endBody() ?>
<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = "/plugins/";</script>
</body>
</html>

<?php $this->endPage() ?>
