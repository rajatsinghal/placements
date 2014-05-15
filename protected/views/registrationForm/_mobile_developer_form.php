<div class="form">
	
	<p><strong>We are looking to kickstart our mobile strategy, for which you will be at the forefront. You will lead the development process for our Android/iOS App.</strong></p>
	
	<p><strong>We are looking for someone with: </strong></p>
	<ol>
		<li>2+ years of Android/iOS application development experience.</li>
		<li>Experienced in leading development of mobile applications that have been successfully delivered to customers.</li>
		<li>Bonus if experienced in PHP and PHP MVC frameworks like Yii and building REST APIs for mobile applications with them.</li>
	</ol><br />

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
                <?php echo $form->label($model, 'Current Annual Salary', array('class'=>'main_label')); ?>
                <?php echo $form->textField($model,'current_annual_salary',array('size'=>60,'maxlength'=>255)); ?>
                <?php echo $form->error($model,'current_annual_salary'); ?>
        </div>
    
    <div class="row">
		<label>Q1) Write about the most challenging technical task that you have worked on.</label>
		<?php echo $form->textArea($model,'challenging_work',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'challenging_work'); ?>
	</div>

    <div class="row">
		<label>Q2) Which mobile app do you particularly like and why?</label>
		<?php echo $form->textArea($model,'liked_mobile_apps',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'liked_mobile_apps'); ?>
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
