<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contact', 'url'=>array('index')),
	array('label'=>'Manage Contact', 'url'=>array('admin')),
);
?>

<div class='page-title'>
	<h1>Create Contact</h1>
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