<?php
/* @var $this DailyExpenseController */
/* @var $model DailyExpense */

$this->breadcrumbs=array(
	'Daily Expenses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DailyExpense', 'url'=>array('index')),
	array('label'=>'Manage DailyExpense', 'url'=>array('admin')),
);
?>

<h1>Create DailyExpense</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>