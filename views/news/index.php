<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\timeago\TimeAgo;
use yii\widgets\LinkPager;

$this->title = 'ข่าวสาร';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?php echo $this->title?></h1>
<?php
foreach ($data as $item) { ?>
    <a href="<?php echo Url::toRoute(['news/view', 'id' => $item->id]);?>">
        <div class="alert alert-bordered-dotted margin-bottom-3 padding-3"><!-- DEFAULT -->
            <strong> <?php echo $item->title;?> </strong>
            <span style="color: black">- โดย <?php echo $item->crby?> (<i><?php echo TimeAgo::widget(['timestamp' => $item->crtime, 'language' => 'th']) ?></i>)</span>
        </div>
    </a>
<?php } ?>


<!-- pagination -->
<div class="text-center">
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
</div>




