<?php
/* @var $this DailyExpenseItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daily Expense Items',
);

$this->menu=array(
	array('label'=>'Create DailyExpenseItem', 'url'=>array('create')),
	array('label'=>'Manage DailyExpenseItem', 'url'=>array('admin')),
);
?>

<h1>Daily Expense Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
