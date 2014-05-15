<br />
<h2>Registration ID #<?php echo $model->id; ?></h2>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
		//'college',
		//'branch',
		'email',
		'mobile',
		//'availability_dates',
		'website',
		//'facebook_profile_url',
		//'hitwicket_team_name',
		//'twitter_id',
		'linkedin_profile_url',
		'github_url',
		'stackoverflow_url',
		array(
			'name'=>'challenging_work',
			'label'=>'Challenging Task',
		),
		array(
			'name'=>'scaled_up_applications',
			'label'=>'Scaled Up Application',
		),
		array(
			'name'=>'sql_vs_nosql',
			'label'=>'Sql vs NoSql',
		),
		array(
			'name'=>'liked_mobile_apps',
			'label'=>'Liked Mobile App',
		),
		array(
			'name'=>'file_upload',
			'type'=>'raw',
			'value'=>CHtml::link('View Resume', Yii::app()->baseUrl.$model->file_upload)
		),
	),
)); ?>
<br />
<br />