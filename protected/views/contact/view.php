<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Contact', 'url'=>array('index')),
	array('label'=>'Create Contact', 'url'=>array('create')),
	array('label'=>'Update Contact', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contact', 'url'=>array('admin')),
);
?>

<h1>View Contact #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'nick_name',
		'contact_number',
		'address',
		'company',
		'date_created',
	),
)); ?>

<h2>Provided Services</h2>

<div class="subMenu">
	<a href="<?php echo $this->createUrl('/job/create', array('contact_id' => $model->id));?>">Add New Job</a>
</div>
<?php 

$dataProvider =  new CArrayDataProvider('Job');
$dataProvider->setData($model->jobs);



$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'job-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		'status',
		'description',
		'created_on',
		'actual_price',
		array (
			'class' => 'CButtonColumn',
			'template' => '{view}{update}',
			'buttons' => array (
					'view' => array (
							'label' => 'View Job Details',
							'url' => 'Yii::app()->createUrl("/job", array("view"=>$data->id))' 
					),
					'update' => array (
							'label' => 'View Job Details',
							'url' => 'Yii::app()->createUrl("/job", array("update"=>$data->id))' 
					) 
			) 
			) 
		),
)); 
?>