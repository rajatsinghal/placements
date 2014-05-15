<div id="registration">

<?php if($role == 'TECH_LEAD') { ?>
	<?php echo $this->renderPartial('_tech_lead_form', array('model'=>$model)); ?>
<?php } else if($role == 'MOBILE_DEVELOPER') { ?>
	<?php echo $this->renderPartial('_mobile_developer_form', array('model'=>$model)); ?>
<?php } ?>

</div>