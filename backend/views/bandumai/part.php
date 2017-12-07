<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\Banhuakoo */

$this->title = 'Create Banhuakoo';
$this->params['breadcrumbs'][] = ['label' => 'บ้านสงวน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banhuakoo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a1')
        ->radioList(
            array ('นาง'=>'นาง','นางสาว'=>'นางสาว','นาย'=>'นาย')
        );
    ?>

    <?= $form->field($model, 'a2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a3')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'a5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a6')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'a7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a21')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'r')->textInput(['maxlength' => true]) ?>

	<?=
	$form->field($model, 'a24')
		->radioList(
			["สูบ" => 'สูบ', "ไม่สูบ" => 'ไม่สูบ', "เคยสูบ" => 'เคยสูบ', null => 'null']
		)
	?>
	
    <?=
	$form->field($model, 'a25')
		->radioList(
			["ดื่ม" => 'ดื่ม', "ไม่ดื่ม" => 'ไม่ดื่ม', "เคยดื่ม" => 'เคยดื่ม' , null => 'null']
		)
	?>

    <?= $form->field($model, 'a26')->textInput(['maxlength' => true]) ?>
	
	
	<?=
	$form->field($model, 'q1')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
    <?=
	$form->field($model, 'q2')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'q3')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'q4')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'q5')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'q6')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'q7')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'q8')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'q9')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'q10')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
    <div class="form-group">
        <?= Html::submitButton('part', ['class' => 'btn btn-success' ]) ?>
    </div>

    <?php ActiveForm::end(); ?>



<script type="text/javascript">
	document.getElementById("bandumai-a5").onchange = function() {myFunction()};
	document.getElementById("all-4").onclick = function() {allFour()};
	
	function myFunction() {
		var age = document.getElementById("bandumai-a5").value;
		var date = "01/01/"+(2560-age-3);
		document.getElementById("bandumai-a6").value = date;
		document.getElementById("bandumai-a5").value = parseInt(age)+3;
	}
</script>

</div>
