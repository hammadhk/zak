<?php
/* @var $this DailyExpenseItemController */
/* @var $model DailyExpenseItem */

$this->breadcrumbs=array(
	'Daily Expense Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DailyExpenseItem', 'url'=>array('index')),
	array('label'=>'Manage DailyExpenseItem', 'url'=>array('admin')),
);
?>

<h1>Create DailyExpenseItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>