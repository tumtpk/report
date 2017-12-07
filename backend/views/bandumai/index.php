<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Bandumai;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchBanHuakoo */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'บ้านสงวน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banhuakoo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create part2', ['part'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export Profile', ['export'], ['class' => 'btn btn-info','target'=>'_blank']) ?>
        <?= Html::a('Export Adl', ['adl'], ['class' => 'btn btn-info','target'=>'_blank']) ?>
        <?= Html::a('Export Osteoarthritis', ['ost'], ['class' => 'btn btn-info','target'=>'_blank']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

     
            'a1',
            'a2',
            'a3',
            'a9',
        	'a10',
            'a5',
            // 'a6',
            // 'a7',
            // 'a8',
            // 'a9',
            // 'a10',
            // 'a11',
            // 'a12',
            // 'a13',
            // 'a14',
            // 'a15',
            // 'a16',
            // 'a17',
            // 'a18',
            // 'a19',
            // 'a20',
            // 'a21',
            // 'a22',
            // 'a23',
            // 'a24',
            // 'a25',
            // 'a26',
            // 'a27',
            // 'a28',

            ['class' => 'yii\grid\ActionColumn'],
        		[
        		'format' => 'raw',
        		'value' => function($model, $key, $index, $column) {
        			return Html::a(
        					'<i class="fa fa-euro"></i>',
        					Url::to(['bandumai/add', 'id' => $model->id]),
        					[
        							'id'=>'grid-custom-button',
        							'data-pjax'=>true,
        							'action'=>Url::to(['bandumai/add', 'id' => $model->id]),
        							'class'=>'glyphicon glyphicon-resize-full',
        					]
        			);
        		}
        		],
        ],
    ]); ?>
</div>
