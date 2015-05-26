<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app ()->name . ' - Login';
$this->breadcrumbs = array (
		'Login' 
);
?>

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'login-form',
		'enableClientValidation' => true,
		'clientOptions' => array (
				'validateOnSubmit' => true 
		) 
) );
?>

<div class="form-group">
		<?php echo $form->textField($model,'username', array('class'=>'form-control', 'placeholder'=>'Username or Email')); ?>
		<?php echo $form->error($model,'username'); ?>
				</div>
<div class="form-group">
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control', 'placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
		<input type="submit" value="&#xf054;">
</div>
<div class="form-options clearfix">
	<a class="pull-right" href="#">Forgot password?</a>
	<div class="text-left">
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->checkBox($model,'rememberMe', array('class'=>'checkbox')); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
					</div>
</div>



<?php $this->endWidget(); ?>
<p class="signup">
	Don't have an account yet? Ask 'admin' to create one.</a>
</p>
<!-- form -->
