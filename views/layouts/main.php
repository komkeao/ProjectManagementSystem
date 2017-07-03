<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
<!--
                    ASIDE
                    Keep it outside of #wrapper (responsive purpose)
                -->
<aside id="aside">
    <nav id="sideNav"><!-- MAIN MENU -->
        <ul class="nav nav-list">
            <li><!-- dashboard -->
                <a class="dashboard" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                    <i class="main-icon fa fa-home"></i> <span>หน้าแรก</span>
                </a>
            </li>
            <li><!-- dashboard -->
                <a class="" href="/site/main"><!-- warning - url used by default by ajax (if eneabled) -->
                    <i class="main-icon fa fa-newspaper-o"></i> <span>ข่าวสาร</span>
                </a>
            </li>
            <li><!-- dashboard -->
                <a class="" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                    <i class="main-icon fa fa-wechat"></i> <span>เว็บบอร์ด</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-file-text-o"></i> <span>โครงาน</span>
                </a>
                <ul><!-- submenus -->
                    <li><a href="/">รายชื่อโครงงาน</a></li>
                    <li><a href="/">โปสเตอร์โครงงาน</a></li>

                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-menu-arrow pull-right"></i>
                    <i class="main-icon fa fa-users"></i> <span>รายชื่อ</span>
                </a>
                <ul><!-- submenus -->
                    <li><a href="/">รายชื่ออาจารย์</a></li>
                    <li><a href="/">รายชื่อนักศึกษา</a></li>
                    <li><a href="/">รายชื่อกรรมการคุมสอบ</a></li>
                    <li><a href="/">นักศึกษาที่ยังไม่เพิ่มโครงงาน</a></li>
                    <li><a href="/">จำนวนโครงงานต่ออาจารย์ที่ปรึกาา</a></li>

                </ul>
            </li>

            <!-- SECOND MAIN LIST -->
            <h3>MORE</h3>
            <ul class="nav nav-list">
                <li><!-- dashboard -->
                    <a class="" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                        <i class="main-icon fa fa-download"></i> <span>ตาวน์โหลด</span>
                    </a>
                </li>
            </ul>

    </nav>

    <span id="asidebg"><!-- aside fixed background --></span>
</aside>
<!-- /ASIDE -->
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

        <form method="get" action="page-search.html" class="search pull-left hidden-xs">
            <input type="text" class="form-control" name="k" placeholder="Search for something..."/>
        </form>

        <nav>

            <!-- OPTIONS LIST -->
            <ul class="nav pull-right">

                <!-- USER OPTIONS -->
                <li class="dropdown pull-left">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <img class="user-avatar" alt="" src="/images/noavatar.jpg" height="34"/>
                        <span class="user-name">
									<span class="hidden-xs">
										เข้าสู่ระบบ <i class="fa fa-angle-down"></i>
									</span>
								</span>
                    </a>
                    <ul class="dropdown-menu hold-on-click">
                        <li><!-- my calendar -->
                            <a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a>
                        </li>
                        <li><!-- my inbox -->
                            <a href="#"><i class="fa fa-envelope"></i> Inbox
                                <span class="pull-right label label-default">0</span>
                            </a>
                        </li>
                        <li><!-- settings -->
                            <a href="page-user-profile.html"><i class="fa fa-cogs"></i> Settings</a>
                        </li>

                        <li class="divider"></li>

                        <li><!-- lockscreen -->
                            <a href="page-lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
                        </li>
                        <li><!-- logout -->
                            <a href="page-login.html"><i class="fa fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- /USER OPTIONS -->

            </ul>
            <!-- /OPTIONS LIST -->

        </nav>

    </header>
    <!-- /HEADER -->
    <!--    <div class="container">-->
    <section id="middle">
        <!-- page title -->
        <header id="page-header">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= Breadcrumbs::widget([
                //'itemTemplate'=>"<li><i>{link}</i></li>\n",
                'homeLink'=>[
                    'label' => Yii::t('yii', 'หน้าหลัก'),
                    'url' => Yii::$app->homeUrl,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [[
                    'label' => '',
                    'url' => ['site/index'],
                    'template' => "<li><b>{link}</b></li>\n", // template for this link only
                ]]
            ]) ?>
            <!--    <ol class="breadcrumb">-->
            <!--        <li><a href="#">หน้าหลัก</a></li>-->
            <!--        <li class="active">Modals</li>-->
            <!--    </ol>-->
        </header>
        <div id="content" class="padding-20">

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="row">

                        <!-- LEFT -->
                        <div class="col-md-9">


<!--                            --><?php //echo Menu::widget([
//                                'items' => [
//                                    // Important: you need to specify url as 'controller/action',
//                                    // not just as 'controller' even if default action is used.
//                                    ['label' => 'Home', 'url' => ['site/index']],
//                                    // 'Products' menu item will be selected as long as the route is 'product/index'
//                                    ['label' => 'Products', 'url' => ['product/index'], 'items' => [
//                                        ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
//                                        ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
//                                    ]],
//                                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//                                ],
//                                'activeCssClass'=>'active ',
//
//                            ]);?>
                            <?= $content ?>

                        <?php $this->beginContent('@app/views/fragments/rightPanel.php'); ?>
                        <?php $this->endContent(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--    </div>-->

</div>

<footer class="footer">
    <div class="container">
        <!--        <p class="pull-left">&copy; My Company --><? //= date('Y') ?><!--</p>-->
        <!---->
        <!--        <p class="pull-right">--><? //= Yii::powered() ?><!--</p>-->
    </div>
</footer>

<?php $this->endBody() ?>
<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = "/plugins/";</script>
</body>
</html>
<?php $this->endPage() ?>
