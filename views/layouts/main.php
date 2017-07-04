<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
<!--  ASIDE -->
<aside id="aside">
    <nav id="sideNav"><!-- MAIN MENU -->

        <?php echo Menu::widget([
            'items' => [
                ['label' => '<i class="main-icon fa fa-home"></i> <span>หน้าหลัก</span>', 'url' => ['site/index']],
                ['label' => '<i class="main-icon fa fa-newspaper-o"></i> <span>ข่าวสาร</span>', 'url' => ['site/news']],
                ['label' => '<i class="main-icon fa fa-wechat"></i> <span>เว็บบอร์ด</span>', 'url' => ['board/index']],
                ['label' => '<i class="fa fa-menu-arrow pull-right"></i><i class="main-icon fa fa-file-text-o"></i> <span>โครงงาน</span>',
                    'template'=>'<a href="#">{label}</a>',
                    'url' => ['#'],'items' => [
                    ['label' => 'รายชื่อโครงงาน', 'url' => ['project/index']],
                    ['label' => 'โปสเตอร์โครงงาน', 'url' => ['product/index']],
                ]], ['label' => '<i class="fa fa-menu-arrow pull-right"></i><i class="main-icon fa fa-users"></i> <span>รายชื่อ</span>', 'template'=>'<a href="#">{label}</a>','items' => [
                    ['label' => 'รายชื่ออาจารย์', 'url' => ['personnel/teachers']],
                    ['label' => 'รายชื่อนักศึกษา', 'url' => ['product/index']],
                    ['label' => 'รายชื่อกรรมการคุมสอบ', 'url' => ['product/index']],
                    ['label' => 'นักศึกษาที่ยังไม่เพิ่มโครงงาน', 'url' => ['product/index']],
                    ['label' => 'จำนวนโครงงานต่ออาจารย์ที่ปรึกาา', 'url' => ['product/index']]
                ]],
                ['label' => '<i class="main-icon fa fa-download"></i>  <span>ดาวน์โหลด</span>', 'url' => ['site/download']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
            ],
            'encodeLabels' => false,
            'activateParents'=>true,
            'options' => [
                'class' => 'nav nav-list',
            ]
        ]); ?>

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

    <!-- MIDDLE -->
    <section id="middle">
        <!-- page title -->
        <header id="page-header">
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

                        <!-- LEFT -->
                        <div class="col-md-9">

                            <?= $content ?>


                        </div>
                        <!-- END LEFT -->
                        <!-- RIGHT -->
                        <?php $this->beginContent('@app/views/fragments/rightPanel.php'); ?>
                        <?php $this->endContent(); ?>
                        <!-- END RIGHT -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END MIDDLE -->

</div>
<!---->
<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--                <p class="pull-left">&copy; My Company --><?// //= date('Y') ?><!--</p>-->
<!---->
<!--                <p class="pull-right">--><?// //= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = "/plugins/";</script>
</body>
</html>
<?php $this->endPage() ?>
