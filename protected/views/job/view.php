<?php
/* @var $this JobController */
/* @var $model Job */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Job', 'url'=>array('index')),
	array('label'=>'Create Job', 'url'=>array('create')),
	array('label'=>'Update Job', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Job', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Job', 'url'=>array('admin')),
);
?>

<h1>View Job #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'contact_id',
		'description',
		'created_on',
		'estimated_end_date',
		'completed_on',
		'actual_price',
		'discount',
		'final_price',
		'status',
	),
)); ?>

<h2>Job Details</h2>

<div class="subMenu">
	<a href="<?php echo $this->createUrl('/jobService/create', array('job_id' => $model->id, 'contact_id' => $model->contact_id));?>">Add New Service</a>
</div>
<?php 

$dataProvider =  new CArrayDataProvider('JobService');
$dataProvider->setData($model->jobServices);

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jobService-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'item',
		'actual_price',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 
?>