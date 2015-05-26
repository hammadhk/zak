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

<div class='page-title'>
	<h1><?php echo "$model->name ($model->nick_name)"?></h1>
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
					'nick_name',
					'contact_number',
					'address',
					'company',
					'date_created',
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
				<h2>Provided Services</h2>
			</div>
			<div class="heading">
				<a class='btn btn-sm btn-primary-outline pull-right' href="<?php echo $this->createUrl('/job/create', array('contact_id' => $model->id));?>"><i class="icon-plus"></i>Add New Job</a>
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
										'label' => 'Update Job Details',
										'url' => 'Yii::app()->createUrl("/job", array("update"=>$data->id))' 
								) 
						) 
						) 
					),
			)); 
			?>
		</div>
	</div>
</div>