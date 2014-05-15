<h1>Registration Forms</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registration-form-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		'email',
		'role',
		array(
			'name'=>'github_url',
			'header'=>'Github'
		),
		array(
			'name'=>'stackoverflow_url',
			'header'=>'Stack Overflow'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
