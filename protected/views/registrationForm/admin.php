<h1>Registration Forms</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registration-form-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		'email',
		'college',
		array(
			'name'=>'facebook_profile_url',
			'header'=>'FB'
		),
		array(
			'name'=>'hitwicket_team_name',
			'header'=>'HW Team'
		),
		//'branch',
		//'mobile',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
