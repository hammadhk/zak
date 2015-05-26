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

<div class='page-title'>
	<h1>Job Details</h1>
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
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="widget-container fluid-height clearfix">

			<div class='page-title padded'>
				<h2>Sub Services</h2>
			</div>
			<div class="heading">
				<a class='btn btn-sm btn-primary-outline pull-right' href="<?php echo $this->createUrl('/jobService/create', array('job_id' => $model->id));?>">Add New Service</a>
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
							'class' => 'CButtonColumn',
							'template' => '{view}{update}',
							'buttons' => array (
									'view' => array (
											'label' => 'View Sub-Service',
											'url' => 'Yii::app()->createUrl("/jobService", array("view"=>$data->id))'
									),
									'update' => array (
											'label' => 'Update Sub-Service',
											'url' => 'Yii::app()->createUrl("/jobService", array("update"=>$data->id))'
									)
							)
						),
					),
				)); 
				?>
		</div>
	</div>
</div>