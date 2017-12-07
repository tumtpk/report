<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Banhuakoo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Banhuakoos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banhuakoo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'a1',
            'a2',
            'a3',
            'a4',
            'a5',
            'a6',
            'a7',
            'a8',
            'a9',
            'a10',
            'a11',
            'a12',
            'a13',
            'a14',
            'a15',
            'a16',
            'a17',
            'a18',
            'a19',
            'a20',
            'a21',
            'a22',
            'a23',
            'a24',
            'a25',
            'a26',
            'a27',
            'a28',
            'o1',
            'o2',
            'o3',
            'o4',
            'o5',
            'o6',
            'o7',
            'o8',
            'o9',
            'o10',
            'o11',
            'o12',
            'd1',
            'd2',
            'd3',
            'd4',
            'd5',
            'd6',
            'd7',
            'd8',
            'd9',
            'd10',
        	'r',
        		'q1',
        		'q2',
        		'q3',
        		'q4',
        		'q5',
        		'q6',
        		'q7',
        		'q8',
        		'q9',
        		'q10',
        ],
    ]) ?>

</div>
