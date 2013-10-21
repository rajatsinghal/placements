<?php
$this->breadcrumbs=array(
	'Testimonials',
);

$this->menu=array(
	array('label'=>'Create Testimonials', 'url'=>array('create')),
	array('label'=>'Manage Testimonials', 'url'=>array('admin')),
);
?>

<h1>Testimonials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
