<?php
/* @var $this JobServiceController */
/* @var $model JobService */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-service-form',
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
		<?php echo $form->labelEx($model,'model',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->dropDownList($model, 'model', 
				array('Service' => 'Labour', 'Part'=>'External Part', 'Inventory'=>'Inventory Part'),
				array('ajax' => array(
					'type'=>'POST',
					'url'=>CController::createUrl('/jobService/items',array('serviceType'=>$model->model)),
					'update'=>'#JobService_item_id'
					),
					'empty' => '(Select a Service Type)',
					'class'=>'form-control'
				)
		);?>
		<?php echo $form->error($model,'model'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'item_id',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->dropDownList($model,'item_id',array(),array('empty' => '(Select a Service Type)','class'=>'form-control')); ?>
		<?php echo $form->error($model,'item_id'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<?php echo $form->labelEx($model,'actual_price',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'actual_price', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'actual_price'); ?>
		</div>
	</div>

	<div class="form-group">
		<label class='control-label col-md-2'></label>
		<div class="col-md-7">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
		<?php $jobId = isset($_GET['job_id']) ? $_GET['job_id']:$model->job_id;?>
		<?php echo CHtml::button('Cancel', array('submit'=>array("/job/$jobId"), 'class'=>'btn btn-default-outline'));?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->