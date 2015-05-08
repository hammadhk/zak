<?php
/* @var $this DailyExpenseController */
/* @var $model DailyExpense */

$this->breadcrumbs=array(
	'Daily Expenses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DailyExpense', 'url'=>array('index')),
	array('label'=>'Create DailyExpense', 'url'=>array('create')),
	array('label'=>'Update DailyExpense', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DailyExpense', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DailyExpense', 'url'=>array('admin')),
);
?>

<h1>View DailyExpense #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'expense',
		'date',
		array('name' => 'expense', 'value' => $model->getItemName()),
	),
)); ?>
