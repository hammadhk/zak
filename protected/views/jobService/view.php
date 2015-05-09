<?php
/* @var $this JobServiceController */
/* @var $model JobService */

$this->breadcrumbs=array(
	'Job Services'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobService', 'url'=>array('index')),
	array('label'=>'Create JobService', 'url'=>array('create')),
	array('label'=>'Update JobService', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobService', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobService', 'url'=>array('admin')),
);
?>

<h1>View JobService #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'job_id',
		'item_id',
		'model',
		'actual_price',
		'date_created',
	),
)); ?>
