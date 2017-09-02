<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectType */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ประเภทโครงงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไขข้อมูล', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'crby',
            'udby',
            'crtime',
            'udtime',
        ],
    ]) ?>

</div>
