<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="widget-content padded">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions' => array('class'=>'form-horizontal')
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'id', array('class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'name',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>64,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'nick_name',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'nick_name',array('size'=>60,'maxlength'=>64,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'contact_number',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'contact_number',array('size'=>32,'maxlength'=>32,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'address',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>512,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'company',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>64,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'date_created',array('class'=>'control-label col-md-2')); ?>
		<div class="col-md-7">
		<?php echo $form->textField($model,'date_created',array('class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-2"></label>
		<div class="col-md-7">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->