<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Walailak */

$this->title = 'Create Walailak';
$this->params['breadcrumbs'][] = ['label' => 'Walailaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="walailak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
