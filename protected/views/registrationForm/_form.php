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
		<?php echo $form->labelEx($model,'branch',array('class'=>'main_label', 'label'=>'Major')); ?>
		<?php echo $form->textField($model,'branch',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'branch'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model, 'availability_dates', array('class'=>'main_label', 'label'=>'Available for Internship')); ?>
		<?php echo $form->textField($model, 'availability_dates', array('size'=>60,'maxlength'=>255, 'placeholder'=>'eg: Nov 2013 to Feb 2014')); ?>
		<?php echo $form->error($model, 'availability_dates'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'hitwicket_team_name',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'hitwicket_team_name',array('size'=>60,'maxlength'=>255,'placeholder'=>'optional')); ?>

		<?php echo $form->error($model,'hitwicket_team_name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'linkedin_profile_url',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'linkedin_profile_url',array('size'=>60,'maxlength'=>255,'placeholder'=>'optional')); ?>

		<?php echo $form->error($model,'linkedin_profile_url'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'facebook_profile_url',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'facebook_profile_url',array('size'=>60,'maxlength'=>255,'placeholder'=>'optional')); ?>

		<?php echo $form->error($model,'facebook_profile_url'); ?>
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
		<label>Signup at Hitwicket.com and go through the new user introduction tutorial. Suggest ways to improve this and make it easier for new users to understand the crux of the game.</label>
		<?php echo $form->textArea($model,'hitwicket_experience',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hitwicket_experience'); ?>
	</div>
    
	<div class="row">
		<label>Go through this match: <a href="http://hitwicket.com/match/show/487237" target="_blank">http://hitwicket.com/match/show/487237</a> and write a 50-100 word match report on it, like a journalist. Try to bring out the excitement of the match in your report.</label>
		<?php echo $form->textArea($model,'match_report',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'match_report'); ?>
	</div>
	
	<div class="row">
		<label>What do your think is the best way for Hitwicket to reach out to all B-School students in India?</label>
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