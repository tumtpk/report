<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Walailak */

$this->title = 'Update Walailak: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Walailaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="walailak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
