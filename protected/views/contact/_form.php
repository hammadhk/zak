<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="widget-content padded">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
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
		<?php echo $form->labelEx($model,'name',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>64,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nick_name',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'nick_name',array('size'=>60,'maxlength'=>64,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nick_name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'contact_number',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'contact_number',array('size'=>32,'maxlength'=>32,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'contact_number'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'address',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>512,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'address'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'company',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>64,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'company'); ?>
		</div>
	</div>

	<div class="form-group">
		<label class='control-label col-md-2'></label>
		<div class="col-md-7">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
		<?php echo CHtml::button('Cancel', array('submit'=>array('/contact'), 'class'=>'btn btn-default-outline'));?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->