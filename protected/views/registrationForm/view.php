<br />
<h2>Registration ID #<?php echo $model->id; ?></h2>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
		'branch',
		'mobile',
		'email',
		'website',
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
		//'wordpress',
		//'wordpress_info',
		'file_upload',
		'information',
		//'question',
	),
)); ?>
<a href="<?php echo Yii::app()->baseUrl.$model->file_upload;?>" >View Resume</a>
<br />
<br />