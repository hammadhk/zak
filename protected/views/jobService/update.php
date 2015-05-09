<?php
/* @var $this JobServiceController */
/* @var $model JobService */

$this->breadcrumbs=array(
	'Job Services'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobService', 'url'=>array('index')),
	array('label'=>'Create JobService', 'url'=>array('create')),
	array('label'=>'View JobService', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobService', 'url'=>array('admin')),
);
?>

<h1>Update JobService <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>