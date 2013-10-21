<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registration-form-form',
	'htmlOptions'=> array('enctype'=>"multipart/form-data"),
	'enableAjaxValidation'=>false,));
 ?>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'branch',array('class'=>'main_label')); ?>
        <?php echo $form->textField($model,'branch',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'branch'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'college',array('class'=>'main_label')); ?>
        <?php echo $form->textField($model,'college',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'college'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'mobile',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255)); ?>
         <p class="hint">(optional)</p>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'twitter_id',array('class'=>'main_label')); ?>
		<?php echo $form->textField($model,'twitter_id',array('size'=>60,'maxlength'=>255)); ?>
        <p class="hint">(optional)</p>
		<?php echo $form->error($model,'twitter_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'os',array('class'=>'main_label')); ?>
		<?php $categories= array(
			  'Mac OSX' => 'Mac OSX',
			  'Linux' => 'Linux',
			  'Windows' => 'Windows',
			   'Others' =>'Others',
			  ); ?>
        <?php echo $form->dropDownList($model,'os', $categories,array('class'=>'short')); ?>
		<?php echo $form->error($model,'os'); ?>
	</div>

	<?php $info_options=array(
	'None'=>'Never used before, but willing to learn',
	'Little'=>'Used a little',
	'Good'=>'I\'ve built things with it',
	
	) ?>
    <br />
	<h4>What is your proficiency with the following</h4>
	<div class="row">
        <?php echo $form->labelEx($model,'php',array('class'=>'main_label')); ?><br />
        <?php echo $form->radioButtonList($model,'php',$info_options); ?>
        <div id="php_textarea" style="display:none">
            <?php echo $form->labelEx($model,'php_info'); ?>
            <?php echo $form->textArea($model,'php_info',array('rows'=>6, 'cols'=>50)); ?>
            <p class="hint">Mention any experience with a PHP MVC framework if any</p>
            <?php echo $form->error($model,'php_info'); ?>
        </div>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'ror',array('class'=>'main_label')); ?><br />
        <?php echo $form->radioButtonList($model,'ror',$info_options); ?>
        <div id="ror_textarea" style="display:none">
            <?php echo $form->labelEx($model,'ror_info'); ?>
            <?php echo $form->textArea($model,'ror_info',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'ror_info'); ?>
        </div>
    </div>

    <div class="row" > <?php echo $form->labelEx($model,'jquery',array('class'=>'main_label')); ?><br />
        <?php echo $form->radioButtonList($model,'jquery',$info_options); ?>
          <div id="jquery_textarea" style="display:none">
			<?php echo $form->labelEx($model,'jquery_info'); ?>
            <?php echo $form->textArea($model,'jquery_info',array('rows'=>6, 'cols'=>80)); ?>
            <?php echo $form->error($model,'jquery_info'); ?>
        </div>
    </div>
    
	<div class="row">
         <?php echo $form->labelEx($model,'drupal',array('class'=>'main_label')); ?><br />
        <?php echo $form->radioButtonList($model,'drupal',$info_options); ?>
        <div id="drupal_textarea" style="display:none">
            <?php echo $form->labelEx($model,'drupal_info'); ?>
            <?php echo $form->textArea($model,'drupal_info',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'drupal_info'); ?>
        </div>
    </div>

	<!--<div class="row">
        <?php echo $form->labelEx($model,'wordpress',array('class'=>'main_label')); ?><br />
        <?php echo $form->radioButtonList($model,'wordpress',$info_options); ?>
	<div class="row" id="wordpress_textarea" style="display:none">
		<?php echo $form->labelEx($model,'More info on your Wordpress work'); ?>
		<?php echo $form->textArea($model,'wordpress_info',array('rows'=>6, 'cols'=>50)); ?></br></br>
		<?php echo $form->error($model,'wordpress_info'); ?>
	</div>
    </div> -->

	<div class="row imp"><br />
		<?php echo $form->labelEx($model,'Upload Resume'); ?>
        <?php echo $form->fileField($model,'file_upload'); ?>
		<?php echo $form->error($model,'file_upload'); ?><br /><br />
	</div>

	<div class="row imp">
		<label>What is your motivation to join us?</label>
		<?php echo $form->textArea($model,'information',array('rows'=>9, 'cols'=>50)); ?>
        <p class="hint">This is very important to us.</p>
		<?php echo $form->error($model,'information'); ?>
	</div>

	<div class="row">
        <label>Are you Human: 3 + 4 = ?</label>
		<?php echo $form->textField($model,'question'); ?>
		<?php echo $form->error($model,'question'); ?>
	</div>
    <script>
    jQuery(document).ready(function ()
		{
			$("input[name='Recruitment[jquery]']").change(radioValueChanged1);
			$("input[name='Recruitment[ror]']").change(radioValueChanged2);
			$("input[name='Recruitment[php]']").change(radioValueChanged3);
			$("input[name='Recruitment[drupal]']").change(radioValueChanged4);
			$("input[name='Recruitment[wordpress]']").change(radioValueChanged5);
		});
		
		function radioValueChanged1()
		{
			radioValue = $(this).val();
			if(radioValue == "Good")
				$('#jquery_textarea').show();
			else
				$('#jquery_textarea').hide();
		} 
		function radioValueChanged2()
		{
			radioValue = $(this).val();
			if(radioValue == "Good")
				$('#ror_textarea').show();
			else
				$('#ror_textarea').hide();
		} 
		function radioValueChanged3()
		{
			radioValue = $(this).val();
			if(radioValue == "Good")
				$('#php_textarea').show();
			else
				$('#php_textarea').hide();
		} 
		function radioValueChanged4()
		{
			radioValue = $(this).val();
			if(radioValue == "Good")
				$('#drupal_textarea').show();
			else
				$('#drupal_textarea').hide();
		} 
		function radioValueChanged5()
		{
			radioValue = $(this).val();
			if(radioValue == "Good")
				$('#wordpress_textarea').show();
			else
				$('#wordpress_textarea').hide();
		} 
		
   </script><br />
	<div class=" buttons tac">
		 <button class="medium awesome decent_button" style="width:120px" type="submit">Submit</button>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->