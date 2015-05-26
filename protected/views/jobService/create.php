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

<div class='page-title'>
	<h1>Add Sub-Service</h1>
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