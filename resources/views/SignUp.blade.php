<!DOCTYPE html>
<html lang="en-us" id="extr-page" class="animated fadeInDown">

<head>
	<meta charset="utf-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

	<title> Sign up</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Basic Styles -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="screen" href="css1/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css1/font-awesome.min.css">

	<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
	<link rel="stylesheet" type="text/css" media="screen" href="css1/smartadmin-production-plugins.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css1/smartadmin-production.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css1/smartadmin-skins.min.css">

	<!-- SmartAdmin RTL Support is under construction-->
	<link rel="stylesheet" type="text/css" media="screen" href="css1/smartadmin-rtl.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css1/your_style.css">

	<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
	<link rel="stylesheet" type="text/css" media="screen" href="css1/demo.min.css">

	<!-- FAVICONS -->
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

	<!-- GOOGLE FONT -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

	<!-- Specifying a Webpage Icon for Web Clip
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
	<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

	<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Startup image for web apps -->
	<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
	<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
	<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">

	<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<!-- FOR SEMESTER SHOW/HIDE FOR STUDENTS  -->
	<script>
		jQuery(document).ready(function($) {
			$('select[name=usertype]').change(function() {
				$("select[name=usertype] option:selected").each(function() {
					if ($(this).val() == "teacher") {
						$('.all').css('display', 'block');
						$('.student').css('display', 'none');
					} else if ($(this).val() == "admin") {
						$('.all').css('display', 'block');
						$('.student').css('display', 'none');
					} else {
						$('.student').css('display', 'block');
					}
				});
			});
		});
	</script>
	<style>
		.student {
			display: none;
		}

		.all {
			display: none;
		}

		.formBackgroundColor {
			background-color: aqua;
		}
	</style>

</head>

<body>

	<!-- ==========================CONTENT STARTS HERE ========================== -->
	<!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
	<header id="header">
		<!--<span id="logo"></span>-->

		<div id="logo-group">
			<span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>

			<!-- END AJAX-DROPDOWN -->
		</div>

		<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Already registered?</span> <a href="/" class="btn btn-danger">Sign In</a> </span>

	</header>

	<div id="main" role="main">

		<!-- MAIN CONTENT -->
		<div id="content" class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 hidden-xs hidden-sm">
					<h1 class="txt-color-red login-header-big">Gcian Portal</h1>
					<div class="hero">

						<div class="pull-left login-desc-box-l">
							<h4 class="paragraph-header"><b>Our motto is "striving for excellence"<b></h4>
							<div class="login-app-icons">
								<a href="https://gcuf.edu.pk/" class="btn btn-danger btn-sm">Official Page</a>
								<a href="https://gcuf.edu.pk/admissions" class="btn btn-danger btn-sm">Admissions</a>
							</div>
						</div>

						<img src="img/demo/iphoneview.png" alt="" class="pull-right display-image" style="width:210px">

					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h5 class="about-heading">About Gcuf History</h5>
							<p>
								Government College University Faisalabad is an institution with a history of
								contribution in the field of education.
								The University enjoys a dynamic reach of multiple disciplines in research and
								development through its different academic programs.
							</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h5 class="about-heading">How many campus does GCUF have?</h5>
							<p>
								Layyah Campus.
								Sahiwal Campus.
								Chiniot Campus.
								Hafizabad Campus.
							</p>
						</div>
					</div>

				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
					<div class="well no-padding formBackgroundColor">

						<form action="/api/signUp" method="post" id="smart-form-register" class="smart-form client-form">
							@csrf
							<header>
								Registration <sup><span class="badge bg-danger rounded-pill" style="background-color:green">
										<p>Free</p>
									</span></sup>
							</header>
							<!-- show errors here -->
							@if($errors->any())
							<div class="fw-bold" style="color: rgb(255, 255, 255); text-align: center; background-color: rgb(252, 78, 65); ">
								<h4>{{$errors->first()}}</h4>
							</div>
							@endif
							<br>
							<!--// show errors here -->

							<fieldset>

								<section>
									<label class="input "><b> Who are You : </b> <i class="icon-append fa fa-user"></i></i>
										<select name="usertype" value="{{ old('usertype') }}" class="w-100 fw-bold" required>
											<option value="" disabled selected>Select</option>
											<option value="student">Student</option>
											<option value="teacher">Teacher</option>
											<!-- <option value="admin">Admin</option> -->
										</select>
									</label>
								</section>

								<section>
									<label class="input"> <i class="icon-append fa fa-user"></i>
										<input type="text" placeholder="User Name" name="name" value="{{ old('name') }}" required />
										<b class="tooltip tooltip-bottom-right">Name is required</b> </label>
								</section>

								<section>
									<label class="input"> <i class="icon-append fa fa-envelope"></i>
										<input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required />
										<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
									</label>
								</section>

								<section class="student">
									<label class="input">Choose You Semester: <i class="icon-append fa fa-user"></i></i>
										<select name="semester" value="{{ old('semester') }}" class="w-100">
											<option value="" disabled selected>Select</option>
											<option value="1"> 1</option>
											<option value="2"> 2</option>
											<option value="3"> 3</option>
											<option value="4"> 4</option>
											<option value="5"> 5</option>
											<option value="6"> 6</option>
											<option value="7"> 7</option>
											<option value="8"> 8</option>
											<option value="9"> 9</option>
											<option value="10">10</option>
										</select>
									</label>
								</section>

								<section>
									<label class="input"> <i class="icon-append fa fa-lock"></i>
										<input type="password" placeholder="Password" name="password" id="myInput2" required />
										<b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
								</section>

								<section>
									<label class="input"> <i class="icon-append fa fa-lock"></i>
										<input type="password" placeholder="Confirm Password" name="password_confirmation" id="myInput3" required />
										<b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
								</section>


								<section>
									<label class="checkbox">
										<input type="checkbox" name="terms" id="terms" required>
										<i></i> I agree with the <a data-toggle="modal" data-target="#myModal"> Terms
											and Conditions </a></label>
								</section>
							</fieldset>
							<footer>
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</footer>

							<div class="message">
								<i class="fa fa-check"></i>
								<p>
									Thank you for your registration!
								</p>
							</div>
						</form>

					</div>
					<p class="note text-center">*FREE Registration ends on October 2022.</p>
					<h5 class="text-center">- Or sign in using -</h5>
					<ul class="list-inline text-center">
						<li>
							<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
				</div>
				<div class="modal-body custom-scroll terms-body">

					<div id="left">

						<h1>All Rights Are Reserved</h1>
						<p>Read and Accept this agreement </p>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<button type="button" class="btn btn-primary" id="i-agree">
							<i class="fa fa-check"></i> I Agree
						</button>

						<button type="button" class="btn btn-danger pull-left" id="print">
							<i class="fa fa-print"></i> Print
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<!-- ==========================CONTENT ENDS HERE ========================== -->

</body>

</html>