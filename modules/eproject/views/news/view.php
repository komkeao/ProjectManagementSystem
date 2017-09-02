<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'ข่าวสาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>
        โดย <?php echo $model->crby?> (<?php  echo $model->crtime."GMT+7"?>)</span>
        <div align="right">
        <?= Html::a('<i class="fa fa-edit"></i> Edit', ['update', 'id' => $model->id], ['class' => '']) ?>
        <?= Html::a('<i class="fa fa-trash"></i> Delete', ['delete', 'id' => $model->id], [
            'style' => 'color:red;',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="">
        <?php
        echo $model->details;
        ?>

    </div>



</div>
