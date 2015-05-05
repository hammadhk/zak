<?php
/* @var $this DailyExpenseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daily Expenses',
);

$this->menu=array(
	array('label'=>'Create DailyExpense', 'url'=>array('create')),
	array('label'=>'Manage DailyExpense', 'url'=>array('admin')),
);
?>

<h1>Daily Expenses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
