<?php
/* @var $this JobServiceController */
/* @var $model JobService */

$this->breadcrumbs=array(
	'Job Services'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobService', 'url'=>array('index')),
	array('label'=>'Manage JobService', 'url'=>array('admin')),
);
?>

<h1>Create JobService</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>