<?php
/* @var $this DailyExpenseItemController */
/* @var $model DailyExpenseItem */

$this->breadcrumbs=array(
	'Daily Expense Items'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DailyExpenseItem', 'url'=>array('index')),
	array('label'=>'Create DailyExpenseItem', 'url'=>array('create')),
	array('label'=>'View DailyExpenseItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DailyExpenseItem', 'url'=>array('admin')),
);
?>

<h1>Update DailyExpenseItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>