<?php
$this->breadcrumbs=array(
	'Registration Forms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RegistrationForm', 'url'=>array('index')),
	array('label'=>'Create RegistrationForm', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('registration-form-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Registration Forms</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registration-form-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'branch',
		'mobile',
		'email',
		'website',
		/*
		'twitter_id',
		'gpa',
		'os',
		'jquery',
		'jquery_info',
		'ror',
		'ror_info',
		'php',
		'php_info',
		'drupal',
		'drupal_info',
		'wordpress',
		'word_press_info',
		'file_upload',
		'information',
		'question',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
