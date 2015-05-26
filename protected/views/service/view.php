<?php
/* @var $this ServiceController */
/* @var $model Service */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Service', 'url'=>array('index')),
	array('label'=>'Create Service', 'url'=>array('create')),
	array('label'=>'Update Service', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Service', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Service', 'url'=>array('admin')),
);
?>

<div class='page-title'>
	<h1>Service Details</h1>
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