<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'สถานะข่าว';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'ข่าวสาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<?php  if (count($data) == 0) {
    echo "<p align='center'>ไม่มีข่าวที่รอการอนุมัติ</p>";
} else { ?>
<div class="table-responsive nomargin">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>รายการ</th>
            <th>โดย</th>
            <th>เมื่อวันที่</th>
            <th>สถานะ</th>
            <th>#</th>

        </tr>
        </thead>
        <tbody>
        <?php

            foreach ($data as $item) { ?>
                <tr>
                    <td><?php echo $item->title ?></td>
                    <td><?php echo $item->crby ?></td>
                    <td><?php echo $item->crtime ?></td>
                    <td><?php echo $item->newsStatus->desc ?></td>
                    <td><?= Html::a('<i class="fa fa-check-square-o"></i>', ['status', 'id' => $item->id], ['style' => 'color:green;']) ?>

                        <?= Html::a('<i class="fa fa-edit"></i>', ['update', 'id' => $item->id]) ?>
                        <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $item->id], [
                            'style' => 'color:red;',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?></td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
</div>
<?php } ?>