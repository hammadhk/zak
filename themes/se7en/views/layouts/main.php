<?php
	Yii::app()->clientscript
		// use it when you need it!
		
// 		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
// 		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCoreScript( 'jquery' )
		->registerCoreScript( 'jquery.ui' );
?>
<!DOCTYPE html>
<html>

<head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700"
	media="all" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/bootstrap.min.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/font-awesome.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/se7en-font.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/isotope.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/jquery.fancybox.css" media="all"
	rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/fullcalendar.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/wizard.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/select2.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/morris.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/datatables.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/datepicker.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/timepicker.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/colorpicker.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/bootstrap-switch.css" media="all"
	rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/daterange-picker.css" media="all"
	rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/typeahead.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/summernote.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/pygments.css" media="all" rel="stylesheet"
	type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/style.css" media="all" rel="stylesheet"
	type="text/css" />

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/raphael.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/selectivizr-min.js" type="text/javascript"></script>
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
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/isotope_extras.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/modernizr.custom.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/select2.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/styleswitcher.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/wysiwyg.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/summernote.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-fileupload.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-timepicker.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-colorpicker.js"
	type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/typeahead.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/daterange-picker.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/date.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/morris.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/skycons.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/fitvids.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/main.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/javascripts/respond.js" type="text/javascript"></script>
<meta
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
	name="viewport">
</head>
<body>
	<div class="modal-shiftfix">
		<!-- Navigation -->
		<div class="navbar navbar-fixed-top scroll-hide">
			<div class="container-fluid top-bar">
				<div class="pull-right">
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown user hidden-xs"><a data-toggle="dropdown"
							class="dropdown-toggle" href="#"> <?php echo ucwords(Yii::app()->user->name);?><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php if(Yii::app()->user->isGuest): ?>
								<li><a href="<?php echo Yii::app()->createUrl('/site/login');?>"> <i class="icon-signout"></i>Login</a></li>
								<?php else:?>
								<li><a href="#"> <i class="icon-user"></i>My Account</a></li>
								<li><a href="<?php echo Yii::app()->createUrl('/site/logout');?>"> <i class="icon-signout"></i>Logout</a></li>
								<?php endif;?>
							</ul></li>
					</ul>
				</div>
				<button class="navbar-toggle">
					<span class="icon-bar"></span><span class="icon-bar"></span><span
						class="icon-bar"></span>
				</button>
				<a class="logo" href="<?php echo Yii::app()->createUrl('/site');?>">se7en</a>
			</div>
			<div class="container-fluid main-nav clearfix">
				<div class="nav-collapse" id="dashboard">
					<ul class="nav">
						<li><a class="current" href="<?php echo Yii::app()->createUrl('/site');?>"><span
								aria-hidden="true" class="se7en-home"></span>Dashboard</a></li>
								
						<li class="dropdown"><a data-toggle="dropdown" href="#"> <span
								aria-hidden="true" class="se7en-forms"></span>Contacts<b
								class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo Yii::app()->createUrl('/contact');?>">Manage Contacts</a></li>
								<li><a href="<?php echo Yii::app()->createUrl('/contact/create');?>">Add Contact</a></li>
							</ul></li>
							
						<li class="dropdown"><a data-toggle="dropdown" href="#"> <span
								aria-hidden="true" class="se7en-pages"></span>Jobs<b
								class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo Yii::app()->createUrl('/job');?>">Manage Jobs</a></li>
								<li><a href="<?php echo Yii::app()->createUrl('/job/create');?>">Add Job</a></li>
							</ul></li>
							
						<li class="dropdown"><a data-toggle="dropdown" href="#"> <span
								aria-hidden="true" class="se7en-feed"></span>Settings<b
								class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo Yii::app()->createUrl('/dailyExpenseItem');?>">Manage Daily Expense Items</a></li>
								<li><a href="<?php echo Yii::app()->createUrl('/service');?>">Manage Services</a></li>
								<li><a href="<?php echo Yii::app()->createUrl('/part');?>">Manage Parts</a></li>
							</ul></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Navigation -->
		<div class="container-fluid main-content">
			<?php echo $content ?>
		</div>
	</div>
</body>

</html>