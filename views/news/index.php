<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'ข่าวสาร';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
foreach ($data as $item) { ?>
    <a href="<?php echo Url::toRoute(['news/view', 'id' => $item->id]);?>">
        <div class="alert alert-bordered-dotted margin-bottom-3 padding-3"><!-- DEFAULT -->
            <strong> <?php echo $item->title;?> </strong>
            <span style="color: black">- โดย <?php echo $item->newsStatus->desc?> (<?php  echo $item->crtime?>)</span>
        </div>
    </a>
<?php } ?>


<!-- pagination -->
<div align="center">
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
</div>

<!--<div class="text-center">-->
<!--    <ul class="pagination">-->
<!--        <li><a href="#">&laquo;</a></li>-->
<!--        <li class="active"><a href="#">1</a></li>-->
<!--        <li><a href="#">2</a></li>-->
<!--        <li><a href="#">3</a></li>-->
<!--        <li><a href="#">4</a></li>-->
<!--        <li><a href="#">5</a></li>-->
<!--        <li><a href="#">&raquo;</a></li>-->
<!--    </ul>-->
<!--</div>-->


