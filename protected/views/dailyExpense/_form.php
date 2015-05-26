<?php
/* @var $this DailyExpenseController */
/* @var $model DailyExpense */
/* @var $form CActiveForm */
?>

<div class="widget-content padded"">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'daily-expense-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>'form-horizontal')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>512,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'description'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'expense',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'expense', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'expense'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php	$records = DailyExpenseItem::model()->findAll();
			    $list = CHtml::listData($records, 'id', 'name');
			    echo $form->labelEx($model, 'expense_item_id',array('class'=>'control-label col-md-2'));
		?>
		<div class="col-md-7">
		<?php 
			    echo $form->dropDownList($model, 'expense_item_id', $list, array('empty' => '(Select an item)','class'=>'form-control'));
			    echo $form->error($model,'expense_item_id'); 
    		?>
    	</div>
	</div>

	<div class="form-group">
		<label class='control-label col-md-2'></label>
		<div class="col-md-7">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
		<?php echo CHtml::button('Cancel', array('submit'=>array('/dailyExpense'), 'class'=>'btn btn-default-outline'));?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->