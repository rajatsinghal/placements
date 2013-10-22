<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta charset="utf-8">
	<title>Hitwicket Internship</title>
	<meta name="description" content="">
	<meta name="author" content="Octathorpe Web Consultants">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css">
    <script language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.6.4.min.js"></script>

	<link rel="shortcut icon" href="images/favicon.png">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="container m20">
		<div class="sixteen columns" id="header">
        	<div class="eight columns alpha">
			<a href="http://hitwicket.com" target="_blank" id="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_com.png" alt="Hitwicket" /></a>
        	</div>
            <div class="eight columns omega last" >
				<h2 class="drive">Internship Registration</h2>
        	</div>
		</div><!-- header -->

	<div class="sixteen columns">
	<?php echo $content; ?>
	</div>

</div><!-- container -->
    <div class="container" id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Hitwicket.com.<br/>
		All Rights Reserved.
	</div><!-- footer -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.6.4.min.js"></script>
</body>
</html>