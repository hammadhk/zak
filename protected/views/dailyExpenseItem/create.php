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

<div class='page-title'>
	<h1>Add Daily Expense Item</h1>
</div>

<div class='row'>
	<div class='col-lg-12'>
		<div class='widget-container fluid-height clearfix'>
			<div class='widget-content padded clearfix'>
				<?php $this->renderPartial('_form', array('model'=>$model)); ?>
			</div>
		</div>
	</div>
</div>