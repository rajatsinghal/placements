<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registration-form-form',
	'htmlOptions'=> array('enctype'=>"multipart/form-data"),
	'enableAjaxValidation'=>false,));
 ?>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'full name',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'email',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'college',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'college',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'college'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model, 'availability_dates', array('class'=>'main_label', 'label'=>'Available for Internship/Work')); ?>
		<?php echo $form->textField($model, 'availability_dates', array('size'=>60,'maxlength'=>255, 'placeholder'=>'eg: Nov 2013 to Feb 2014')); ?>
		<?php echo $form->error($model, 'availability_dates'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'hitwicket_team_name',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'hitwicket_team_name',array('size'=>60,'maxlength'=>255)); ?>

		<?php echo $form->error($model,'hitwicket_team_name'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'twitter_id',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'twitter_id',array('size'=>60,'maxlength'=>255,'placeholder'=>'optional')); ?>

		<?php echo $form->error($model,'twitter_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website or Blog',array('class'=>'main_label')); ?>
        
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255,'placeholder'=>'optional')); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>
	
    <br />

	<h4>Answer following</h4>
	<!--<div class="row">
		<label>Have you read through the internship details? Explain in less than 50-75 words why you are the most suitable person for this internship.</label>
		<?php echo $form->textArea($model,'why_suitable',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why_suitable'); ?>
	</div> -->
    
    <div class="row">
		<label>Do you have any prior experience related to marketing through Social Media? Talk about internships or projects that you have done or any other initiative that you have taken related to this. Mention even if you have done it for your college event or your personal blog.</label>
		<?php echo $form->textArea($model,'past_experience',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'past_experience'); ?>
	</div>

    <div class="row">
		<label>Suggest ways to improve Hitwicket and make it easier for new users to understand the crux of the game.</label>
		<?php echo $form->textArea($model,'hitwicket_experience',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hitwicket_experience'); ?>
	</div>
	
	<div class="row">
		<label>Suggest ways to improve Hitwicket's User engagement strategies ( Email, Forum, Facebook page, Twitter etc.).</label>
		<?php echo $form->textArea($model,'hiwicket_user_engagement_strategy',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hiwicket_user_engagement_strategy'); ?>
	</div>
    
	
	<div class="row">
		<label>What do your think is the best way for Hitwicket to reach out to College students in India?</label>
		<?php echo $form->textArea($model,'reachout_plan',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reachout_plan'); ?>
	</div>


	<!--<div class="row imp">
		<label>What is your motivation to work at a startup like us?</label>
		<?php echo $form->textArea($model,'information',array('rows'=>9, 'cols'=>50)); ?>
        <p class="hint">This is very important to us.</p>
		<?php echo $form->error($model,'information'); ?>
	</div>
 -->

	<div class="row imp">
		<?php echo $form->labelEx($model,'Upload Resume'); ?>
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