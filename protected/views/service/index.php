<?php
/* @var $this ServiceController */
/* @var $model Service */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Service', 'url'=>array('index')),
	array('label'=>'Create Service', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#service-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class='page-title'>
	<h1>Manage Services</h1>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="widget-container fluid-height clearfix">
			<div class="widget-content padded clearfix">
				
				<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
				<div class="search-form" style="display:none">
				
				<p>
				You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
				or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
				</p>
				
				<?php $this->renderPartial('_search',array(
					'model'=>$model,
				)); ?>
				</div><!-- search-form -->
			</div>
			<div class="heading">
				<a class="btn btn-sm btn-primary-outline pull-right" href="<?php echo $this->createUrl('create')?>"><i class="icon-plus"></i>Add Service</a>
			</div>
			
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'service-grid',
				'dataProvider'=>$model->search(),
				'columns'=>array(
					'id',
					'name',
					array(
						'class'=>'CButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
			
