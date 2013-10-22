<br />
<h2>Registration ID #<?php echo $model->id; ?></h2>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
		'college',
		'branch',
		'mobile',
		'email',
		'website',
		'facebook_profile_url',
		'hitwicket_team_name',
		'twitter_id',
		'linkedin_profile_url',
		array(
			'name'=>'past_experience',
			'label'=>'Past Experience',
		),
		array(
			'name'=>'hitwicket_experience',
			'label'=>'Hitwicket Experience',
		),
		array(
			'name'=>'match_report',
			'label'=>'HW <a href="http://hitwicket.com/match/show/487237" target="_blank">Match</a> Report',
		),
		array(
			'name'=>'reachout_plan',
			'label'=>'Reach-out Plan',
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