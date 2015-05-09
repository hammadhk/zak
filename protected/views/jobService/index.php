<?php
/* @var $this JobServiceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Services',
);

$this->menu=array(
	array('label'=>'Create JobService', 'url'=>array('create')),
	array('label'=>'Manage JobService', 'url'=>array('admin')),
);
?>

<h1>Job Services</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
