<?php
/* @var $this ServiceController */
/* @var $model Service */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions' => array('class'=>'form-horizontal')
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'id',array('class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'name',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<label class='control-label col-md-2'></label>
		<div class="col-md-7">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->