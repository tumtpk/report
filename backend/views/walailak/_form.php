<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Banhuakoo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banhuakoo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a1')
        ->dropDownList(
            array ('นาง'=>'นาง','นางสาว'=>'นางสาว','นาย'=>'นาย'),           // Flat array ('id'=>'label')
            ['prompt'=>'ต้องเลือก']    // options
        );
    ?>

    <?= $form->field($model, 'a2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a3')->textInput(['maxlength' => true]) ?>
    
     <?= $form->field($model, 'a27')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a28')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a21')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'r')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a23')->textInput(['maxlength' => true]) ?>
	
	<?=
	$form->field($model, 'a24')
		->radioList(
			["สูบ" => 'สูบ', "ไม่สูบ" => 'ไม่สูบ']
		)
	?>
	
    <?=
	$form->field($model, 'a25')
		->radioList(
			["ดื่ม" => 'ดื่ม', "ไม่ดื่ม" => 'ไม่ดื่ม']
		)
	?>

    <?= $form->field($model, 'a26')->textInput(['maxlength' => true]) ?>

    <?=
	$form->field($model, 'o1')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>

    <?=
	$form->field($model, 'o2')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o3')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o4')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o5')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o6')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o7')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o8')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o9')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o10')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o11')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'o12')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'd1')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
    <?=
	$form->field($model, 'd2')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'd3')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'd4')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'd5')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'd6')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'd7')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'd8')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'd9')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
	<?=
	$form->field($model, 'd10')
		->radioList(
			[0 => '0', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', null => 'null']
		)
	?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
	document.getElementById("banhuakoo-a5").onchange = function() {myFunction()};
	
	function myFunction() {
		var age = document.getElementById("banhuakoo-a5").value;
		var date = "01/01/"+(2560-age);
		document.getElementById("banhuakoo-a6").value = date;
	}
</script>
