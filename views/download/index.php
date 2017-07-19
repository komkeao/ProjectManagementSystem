<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\timeago\TimeAgo;
use yii\widgets\LinkPager;

$this->title = 'ดาวน์โหลด';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class=" nomargin">
    <table class="table table-bordered table-striped">
        <thead>

        <tr>
            <th>รายละเอียด</th>
            <th>แก้ไขเมื่อ</th>
            <th>สร้างเมื่อ</th>
            <th><a href="create" class="btn btn-success btn-xs"><i class="fa fa-plus-square"></i> Add </a></th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $item) {  ?>
            <tr>
                <td><b><?php echo $item->title ?></b></td>
                <td><?php echo TimeAgo::widget(['timestamp' => $item->udtime, 'language' => 'th']) ?></td>
                <td><?php echo TimeAgo::widget(['timestamp' => $item->crtime, 'language' => 'th']) ?></td>
                <td>
                    <?= Html::a('<i class="fa fa-download"></i>', [$item->filePath],['style' => 'color:green;']) ?>
                    <?= Html::a('<i class="fa fa-edit"></i>', ['update', 'id' => $item->id]) ?>
                    <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $item->id], [
                        'style' => 'color:red;',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </td>
            </tr>

        <?php } ?>
        </tbody>
    </table>
</div>
<div class="text-center">
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
</div>