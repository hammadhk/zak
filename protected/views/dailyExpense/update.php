<?php
/* @var $this DailyExpenseController */
/* @var $model DailyExpense */

$this->breadcrumbs=array(
	'Daily Expenses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DailyExpense', 'url'=>array('index')),
	array('label'=>'Create DailyExpense', 'url'=>array('create')),
	array('label'=>'View DailyExpense', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DailyExpense', 'url'=>array('admin')),
);
?>

<h1>Update DailyExpense <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>