<?php
	Yii::app()->clientscript
		// use it when you need it!
		
// 		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
// 		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCoreScript( 'jquery' )
// 		->registerCoreScript( 'jquery-ui' );
?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700"
	media="all" rel="stylesheet" type="text/css" />
<link
	href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/bootstrap.min.css"
	media="all" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/font-awesome.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/se7en-font.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/style.css" media="all" rel="stylesheet"
	type="text/css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"
	type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/raphael.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.mousewheel.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.vmap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.vmap.sampledata.js"
	type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.bootstrap.wizard.js"
	type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/gcal.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.dataTables.min.js"
	type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/datatable-editable.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.easy-pie-chart.js"
	type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/excanvas.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/masonry.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/modernizr.custom.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/select2.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/styleswitcher.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/wysiwyg.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-fileupload.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-timepicker.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-colorpicker.js"
	type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/daterange-picker.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/date.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/morris.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/skycons.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/fitvids.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/main.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/respond.js" type="text/javascript"></script>
<meta
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
	name="viewport">
</head>
<body class="login1">
	<!-- Login Screen -->
	<div class="login-wrapper">
		<div class="login-container">
			<a href="index.html"><img width="200"
				src="<?php echo Yii::app()->theme->baseUrl; ?>/images/zak-login-logo.jpg" /></a>
			<?php echo $content ?>
		</div>
	</div>
	<!-- End Login Screen -->
</body>

</html>