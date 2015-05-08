<?php
/* @var $this DailyExpenseController */
/* @var $model DailyExpense */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'daily-expense-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expense'); ?>
		<?php echo $form->textField($model,'expense'); ?>
		<?php echo $form->error($model,'expense'); ?>
	</div>

	<div class="row">
		<?php	$records = DailyExpenseItem::model()->findAll();
			    $list = CHtml::listData($records, 'id', 'name');
			    echo $form->dropDownList($model, 'expense_item_id', $list, array('empty' => '(Select an item)'));
			    echo $form->error($model,'expense_item_id'); 
    		?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->