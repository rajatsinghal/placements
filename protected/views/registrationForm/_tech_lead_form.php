<div class="form">
	
	<p><strong>We are looking to get our server and database architecture up-to-speed to handle the influx of new users and you will be playing a crucial role in that. You will be collaborating closely with the Product managers and Developers in your role.</strong></p>
	
	<p><strong>We are looking for someone with: </strong></p>
		<ol>
			<li>4+ years experience developing PHP websites or enterprise applications.</li>
			<li>Deep experience with at least one PHP development framework (Zend, CakePHP, Yii etc.).</li>
			<li>Experience with deploying large applications and maintaining and scaling them.</li>
			<li>Strong background in Linux and Experience in using it in Production.</li>
		</ol><br /	>
	

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registration-form-form',
	'htmlOptions'=> array('enctype'=>"multipart/form-data"),
	'enableAjaxValidation'=>false,));
 ?>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->label($model,'full name',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>	

	<div class="row">
		<?php echo $form->label($model,'email',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'github_url',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'github_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'github_url'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'stackoverflow_url',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'stackoverflow_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'stackoverflow_url'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'linkedin_profile_url',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'linkedin_profile_url',array('size'=>60, 'maxlength'=>255)); ?>

		<?php echo $form->error($model,'linkedin_profile_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'website or Blog',array('class'=>'main_label')); ?>
        
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>
	
    
    <div class="row">
		<label>Q1) Write about the most challenging technical task that you have worked on.</label>
		<?php echo $form->textArea($model,'challenging_work',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'challenging_work'); ?>
	</div>

    <div class="row">
		<label>Q2) A brief on any application that you have scaled up to handle thousands of users.</label>
		<?php echo $form->textArea($model,'scaled_up_applications',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'scaled_up_applications'); ?>
	</div>
	
	<div class="row">
		<label>Q3) SQL vs NoSQL. Which one do you prefer and why?</label>
		<?php echo $form->textArea($model,'sql_vs_nosql',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sql_vs_nosql'); ?>
	</div>

	<div class="row imp">
		<?php echo $form->label($model,'Upload Resume'); ?>
        <?php echo $form->fileField($model,'file_upload'); ?>
		<?php echo $form->error($model,'file_upload'); ?><br />
	</div>
	<div class="row">
        <label>Are you Human, 3 + FOUR = ?</label>
		<?php echo $form->textField($model,'question'); ?>
		<?php echo $form->error($model,'question'); ?>
	</div><br />
	<div class=" buttons tac">
		 <button class="medium awesome decent_button" style="width:120px" type="submit">Submit</button>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->