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
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->dropDownList($model, 'model', 
				array('Service' => 'Labour', 'Part'=>'External Part', 'Inventory'=>'Inventory Part'),
				array('ajax' => array(
					'type'=>'POST',
					'url'=>CController::createUrl('/jobService/items',array('serviceType'=>$model->model)),
					'update'=>'#JobService_item_id'
					),
					'empty' => '(Select a Service Type)'
				)
		);?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->dropDownList($model,'item_id',array(),array('empty' => '(Select a Service Type)')); ?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'actual_price'); ?>
		<?php echo $form->textField($model,'actual_price'); ?>
		<?php echo $form->error($model,'actual_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->