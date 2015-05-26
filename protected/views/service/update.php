<?php
/* @var $this ServiceController */
/* @var $model Service */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Service', 'url'=>array('index')),
	array('label'=>'Create Service', 'url'=>array('create')),
	array('label'=>'View Service', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Service', 'url'=>array('admin')),
);
?>

<div class='page-title'>
	<h1>Update Service</h1>
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