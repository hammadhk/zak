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

<div class='page-title'>
	<h1>Sub-Service Details</h1>
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
						'job_id',
						'item_id',
						'model',
						'actual_price',
						'date_created',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>
