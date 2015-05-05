<?php
/* @var $this JobController */
/* @var $data Job */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id')); ?>:</b>
	<?php echo CHtml::encode($data->contact_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estimated_end_date')); ?>:</b>
	<?php echo CHtml::encode($data->estimated_end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('completed_on')); ?>:</b>
	<?php echo CHtml::encode($data->completed_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actual_price')); ?>:</b>
	<?php echo CHtml::encode($data->actual_price); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('final_price')); ?>:</b>
	<?php echo CHtml::encode($data->final_price); ?>
	<br />

	*/ ?>

</div>