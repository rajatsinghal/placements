<?php
$this->breadcrumbs=array(
	'Testimonials'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Testimonials', 'url'=>array('index')),
	array('label'=>'Create Testimonials', 'url'=>array('create')),
	array('label'=>'Update Testimonials', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Testimonials', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Testimonials', 'url'=>array('admin')),
);
?>

<h1>View Testimonials #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'position',
		'company',
		'content',
		'created',
	),
)); ?>
