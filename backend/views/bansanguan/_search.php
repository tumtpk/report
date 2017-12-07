<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchBanHuakoo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banhuakoo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'a1') ?>

    <?= $form->field($model, 'a2') ?>

    <?= $form->field($model, 'a3') ?>

    <?= $form->field($model, 'a4') ?>
    
    <?= $form->field($model, 'a9') ?>
    
    <?= $form->field($model, 'a10') ?>

    <?php // echo $form->field($model, 'a5') ?>

    <?php // echo $form->field($model, 'a6') ?>

    <?php // echo $form->field($model, 'a7') ?>

    <?php // echo $form->field($model, 'a8') ?>

    <?php // echo $form->field($model, 'a9') ?>

    <?php // echo $form->field($model, 'a10') ?>

    <?php // echo $form->field($model, 'a11') ?>

    <?php // echo $form->field($model, 'a12') ?>

    <?php // echo $form->field($model, 'a13') ?>

    <?php // echo $form->field($model, 'a14') ?>

    <?php // echo $form->field($model, 'a15') ?>

    <?php // echo $form->field($model, 'a16') ?>

    <?php // echo $form->field($model, 'a17') ?>

    <?php // echo $form->field($model, 'a18') ?>

    <?php // echo $form->field($model, 'a19') ?>

    <?php // echo $form->field($model, 'a20') ?>

    <?php // echo $form->field($model, 'a21') ?>

    <?php // echo $form->field($model, 'a22') ?>

    <?php // echo $form->field($model, 'a23') ?>

    <?php // echo $form->field($model, 'a24') ?>

    <?php // echo $form->field($model, 'a25') ?>

    <?php // echo $form->field($model, 'a26') ?>

    <?php // echo $form->field($model, 'a27') ?>

    <?php // echo $form->field($model, 'a28') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
