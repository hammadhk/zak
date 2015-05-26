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

<div class='page-title'>
	<h1>Daily Expense Item Details</h1>
</div>


<div class="row">
	<div class="col-lg-12">
		<div class="widget-container fluid-height clearfix">
			<div class="heading">
				<a class="btn btn-sm btn-primary-outline pull-right" href="javascript:history.go(-1);">Back</a>
			</div>
			<div class="widget-content padded clearfix">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'id',
						'name',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>