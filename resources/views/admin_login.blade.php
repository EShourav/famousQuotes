<!DOCTYPE html>
<html lang="en">

<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Login</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="../assets_admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets_admin/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="../assets_admin/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="../assets_admin/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	
	
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="../assets_admin/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(../assets_admin/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<p class="alert-danger">
					<?php
						$message=Session::get('message');
						if($message){
							echo $message;
							Session::put('message', NULL);
						}
					?>
					</p>

					<h2>Login to your account</h2>
					<form class="form-horizontal" action="{{url('/admin_login')}}" method="post">
						{{csrf_field()}}
						<fieldset>	
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="admin_email" id="username" type="text" placeholder="type email address"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="admin_password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
						}
					</form>
						
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="../assets_admin/js/jquery-1.9.1.min.js"></script>
		<script src="../assets_admin/js/jquery-migrate-1.0.0.min.js"></script>
		<script src="../assets_admin/js/jquery-ui-1.10.0.custom.min.js"></script>
		<script src="../assets_admin/js/jquery.ui.touch-punch.js"></script>
		<script src="../assets_admin/js/modernizr.js"></script>
		<script src="../assets_admin/js/bootstrap.min.js"></script>
		<script src="../assets_admin/js/jquery.cookie.js"></script>
		<script src='../assets_admin/js/fullcalendar.min.js'></script>
		<script src='../assets_admin/js/jquery.dataTables.min.js'></script>
		<script src="../assets_admin/js/excanvas.js"></script>
		<script src="../assets_admin/js/jquery.flot.js"></script>
		<script src="../assets_admin/js/jquery.flot.pie.js"></script>
		<script src="../assets_admin/js/jquery.flot.stack.js"></script>
		<script src="../assets_admin/js/jquery.flot.resize.min.js"></script>
		<script src="../assets_admin/js/jquery.chosen.min.js"></script>
		<script src="../assets_admin/js/jquery.uniform.min.js"></script>
		<script src="../assets_admin/js/jquery.cleditor.min.js"></script>
		<script src="../assets_admin/js/jquery.noty.js"></script>
		<script src="../assets_admin/js/jquery.elfinder.min.js"></script>
		<script src="../assets_admin/js/jquery.raty.min.js"></script>
		<script src="../assets_admin/js/jquery.iphone.toggle.js"></script>
		<script src="../assets_admin/js/jquery.uploadify-3.1.min.js"></script>
		<script src="../assets_admin/js/jquery.gritter.min.js"></script>
		<script src="../assets_admin/js/jquery.imagesloaded.js"></script>
		<script src="../assets_admin/js/jquery.masonry.min.js"></script>
		<script src="../assets_admin/js/jquery.knob.modified.js"></script>
		<script src="../assets_admin/js/jquery.sparkline.min.js"></script>
		<script src="../assets_admin/js/counter.js"></script>
		<script src="../assets_admin/js/retina.js"></script>
		<script src="../assets_admin/js/custom.js"></script>
	<!-- end: JavaScript-->
</body>
<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:01 GMT -->
</html>
