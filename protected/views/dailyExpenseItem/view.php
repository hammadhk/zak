<?php
/* @var $this DailyExpenseItemController */
/* @var $model DailyExpenseItem */

$this->breadcrumbs=array(
	'Daily Expense Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DailyExpenseItem', 'url'=>array('index')),
	array('label'=>'Create DailyExpenseItem', 'url'=>array('create')),
	array('label'=>'Update DailyExpenseItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DailyExpenseItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DailyExpenseItem', 'url'=>array('admin')),
);
?>

<h1>View DailyExpenseItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
