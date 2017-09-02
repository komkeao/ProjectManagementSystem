<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ประเภทโครงงาน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'crby',
//            'udby',
//            'crtime',
            // 'udtime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <p>
        <?= Html::a('เพิ่มประเภทโครงงาน', ['create'], ['class' => 'btn btn-default pull-right']) ?>
    </p>
    </p>
</div>
