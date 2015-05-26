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

<div class='page-title'>
	<h1>Update Daily Expense</h1>
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