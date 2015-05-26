<?php
/* @var $this JobController */
/* @var $model Job */
/* @var $form CActiveForm */
?>

<div class="widget-content padded"">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>'form-horizontal')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textArea($model,'description',array('rows'=>'3', 'size'=>60,'maxlength'=>2048,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'description'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'estimated_end_date',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'estimated_end_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'estimated_end_date'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'completed_on',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'completed_on',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'completed_on'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'actual_price',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'actual_price',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'actual_price'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'discount',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'discount',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'discount'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'status',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'status',array('size'=>23,'maxlength'=>23, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'status'); ?>
		</div>
	</div>

	<div class="form-group">
		<label class='control-label col-md-2'></label>
		<div class="col-md-7">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
		<?php $contact_id = isset($_GET['contact_id']) ? $_GET['contact_id']:$model->contact_id;?>
		<?php echo CHtml::button('Cancel', array('submit'=>array("/contact/$contact_id"), 'class'=>'btn btn-default-outline'));?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->