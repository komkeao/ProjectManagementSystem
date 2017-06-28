<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
<body>
<?php $this->beginBody() ?>

<div id="wrapper">
    <!--
                    ASIDE
                    Keep it outside of #wrapper (responsive purpose)
                -->
    <aside id="aside">
        <!--
            Always open:
            <li class="active alays-open">

            LABELS:
                <span class="label label-danger pull-right">1</span>
                <span class="label label-default pull-right">1</span>
                <span class="label label-warning pull-right">1</span>
                <span class="label label-success pull-right">1</span>
                <span class="label label-info pull-right">1</span>
        -->
        <nav id="sideNav"><!-- MAIN MENU -->
            <ul class="nav nav-list">
                <li><!-- dashboard -->
                    <a class="dashboard" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                        <i class="main-icon fa fa-dashboard"></i> <span>หน้าแรก</span>
                    </a>
                </li>
                <li><!-- dashboard -->
                    <a class="" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                        <i class="main-icon fa fa-dashboard"></i> <span>ข่าวสาร</span>
                    </a>
                </li>
                <li><!-- dashboard -->
                    <a class="" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                        <i class="main-icon fa fa-dashboard"></i> <span>เว็บบอร์ด</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-menu-arrow pull-right"></i>
                        <i class="main-icon fa fa-bar-chart-o"></i> <span>โครงาน</span>
                    </a>
                    <ul><!-- submenus -->
                        <li><a href="/">รายชื่อโครงงาน</a></li>
                        <li><a href="/">โปสเตอร์โครงงาน</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-menu-arrow pull-right"></i>
                        <i class="main-icon fa fa-bar-chart-o"></i> <span>รายชื่อ</span>
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
                            <i class="main-icon fa fa-dashboard"></i> <span>ตาวน์โหลด</span>
                        </a>
                    </li>
                </ul>

        </nav>

        <span id="asidebg"><!-- aside fixed background --></span>
    </aside>
    <!-- /ASIDE -->


    <!-- HEADER -->
    <header id="header">

        <!-- Mobile Button -->
        <button id="mobileMenuBtn"></button>

        <!-- Logo -->
        <span class="logo pull-left">
					<img src="/images/logo_light.png" alt="admin panel" height="35"/>
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
										John Doe <i class="fa fa-angle-down"></i>
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
    <div class="container">
    <section id="middle">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

            <?= $content ?>
    </section>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = "/plugins/";</script>
</body>
</html>
<?php $this->endPage() ?>
