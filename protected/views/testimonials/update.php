<?php
$this->breadcrumbs=array(
	'Testimonials'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Testimonials', 'url'=>array('index')),
	array('label'=>'Create Testimonials', 'url'=>array('create')),
	array('label'=>'View Testimonials', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Testimonials', 'url'=>array('admin')),
);
?>

<h1>Update Testimonials <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>