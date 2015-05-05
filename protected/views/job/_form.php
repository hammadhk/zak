<?php
/* @var $this JobController */
/* @var $model Job */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_id'); ?>
		<?php echo $form->textField($model,'contact_id'); ?>
		<?php echo $form->error($model,'contact_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
		<?php echo $form->error($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estimated_end_date'); ?>
		<?php echo $form->textField($model,'estimated_end_date'); ?>
		<?php echo $form->error($model,'estimated_end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'completed_on'); ?>
		<?php echo $form->textField($model,'completed_on'); ?>
		<?php echo $form->error($model,'completed_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actual_price'); ?>
		<?php echo $form->textField($model,'actual_price'); ?>
		<?php echo $form->error($model,'actual_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount'); ?>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'final_price'); ?>
		<?php echo $form->textField($model,'final_price'); ?>
		<?php echo $form->error($model,'final_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->