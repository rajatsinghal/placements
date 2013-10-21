<?php
$this->breadcrumbs=array(
	'Registration Forms'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RegistrationForm', 'url'=>array('index')),
	array('label'=>'Create RegistrationForm', 'url'=>array('create')),
	array('label'=>'View RegistrationForm', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RegistrationForm', 'url'=>array('admin')),
);
?>

<h1>Update RegistrationForm <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>