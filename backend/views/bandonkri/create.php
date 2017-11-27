<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Banhuakoo */

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Bandonkri', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banhuakoo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
