<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProjectType */

$this->title = 'เพิ่มประเภทโครงงาน';
$this->params['breadcrumbs'][] = ['label' => 'ประเภทโครงงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-type-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
