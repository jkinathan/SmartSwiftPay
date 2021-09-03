<!DOCTYPE html>


<?php  
 ob_start();
include 'strip.php'; 

 
 
include 'EnClass.php';
include 'session.php';
 

?>

<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>SmartSwiftPay</title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<!-- end: MAIN CSS -->
		<!-- start: CLIP-TWO CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<!-- end: CLIP-TWO CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<body>
		<div id="app">
			<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<nav>
						<!-- start: SEARCH FORM -->
						<div class="search-form">
							<a class="s-open" href="#">
								<i class="ti-search"></i>
							</a>
							<form class="navbar-form" role="search">
								<a class="s-remove" href="#" target=".navbar-form">
									<i class="ti-close"></i>
								</a>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search...">
									<button class="btn search-button" type="submit">
										<i class="ti-search"></i>
									</button>
								</div>
							</form>
						</div>
						<!-- end: SEARCH FORM -->
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span>Layouts</span>
						</div>
						<ul class="main-navigation-menu">
							<li>
								<a href="dashboard">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-newspaper-o"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>
					 
						</ul>
						
						
						<div class="navbar-title">
							<span>Wallet</span>
						</div>
						<ul class="main-navigation-menu">
							<li >
								<a href="withdraw">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-briefcase"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Withdrawal </span>
										</div>
									</div>
								</a>
							</li>
					 
						</ul>
						
						
						
						<div class="navbar-title">
							<span>Card</span>
						</div>
						<ul class="main-navigation-menu">
							<li  class="active open">
								<a href="card">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-credit-card"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Activate Card </span>
										</div>
									</div>
								</a>
							</li>
					 
						</ul>
						
						
						<!-- end: MAIN NAVIGATION MENU -->
						<!-- start: CORE FEATURES -->
						<div class="navbar-title">
							<span>Account</span>
						</div>
						<ul class="folders">
							<li>
								<a href="kyc">
									<div class="item-content">
										<div class="item-media">
											<span class="fa-stack"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-thumbs-o-up fa-stack-1x fa-inverse"></i> </span>
										</div>
										<div class="item-inner">
											<span class="title"> KYC </span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="settings">
									<div class="item-content">
										<div class="item-media">
											<span class="fa-stack"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-gears fa-stack-1x fa-inverse"></i> </span>
										</div>
										<div class="item-inner">
											<span class="title"> Account Details </span>
										</div>
									</div>
								</a>
							</li>
						</ul>
						<!-- end: CORE FEATURES -->
						<!-- start: DOCUMENTATION BUTTON -->
						 
						<!-- end: DOCUMENTATION BUTTON -->
					</nav>
				</div>
			</div>
			<!-- / sidebar -->
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
			
			
				<?php include('nav_header.php'); ?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
					
					
					 
					 
						<div class="container-fluid container-fullw padding-bottom-10">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										 
											<div class="panel panel-white no-radius" id="visits">
												 
												<div collapse="visits" class="panel-wrapper">
													<div class="panel-body">
														
																<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h3 class="over-title margin-bottom-15"><span class="text-bold">Merchant Card Activations</span></h3>
									<p>
										Choose your preferred card option and pay with Bitcoin
									</p>
									<div class="pricing-table pricing-blue">
										<div class="col-lg-6 col-md-6 col-xs-8">
											<ul class="plan plan1">
												<li class="plan-name">
												
														<span class="fa-stack fa-2x">  <i class="fa fa-credit-card"></i> </span>
														<h2 class="StepTitle" style="color:white">Master Card</h2>
												 
												</li>
												 
												<li class="plan-price">
													<h3> 1 BTC <span class="price-cents"></span></h3>
													
													 <div align="center"><button name="login" class="btn btn-primary"> Proceed <i class="fa fa-arrow-circle-right"></i> </button>
													 </div>
												</li>
												<li align = "left">
														<h5 class="over-title margin-bottom-15">  <span class="text-bold">Description</span></h5>
														<p> SmartSwiftPay Platinum card Perks </p>
												</li>
												<li align = "left">
													 <h5 class="over-title margin-bottom-15">  <span class="text-bold">Features</span></h5>
													 
													  <ul>
														<li>
															 Unlimited Withdrawal
														</li>
														<li>
															$1,000,000 daily
														</li>
														<li>
															Unlimited per transaction
														</li>
														 
													 </ul>
													 
													 <br/><br/><br/><br/>
												</li>
											 
											</ul>
											
										
											
										</div>
										
										
										
										<div class="col-lg-6 col-md-6 col-xs-8">
											<ul class="plan plan2 featured">
												<li class="plan-name">
												
														<span class="fa-stack fa-2x">  <i class="fa fa-credit-card"></i> </span>
														<h2 class="StepTitle" style="color:white">Platinum Card</h2>
												 
												</li>
												<li class="plan-price">
													<h3> 0.25 BTC <span class="price-cents"></span></h3>
													
														 <div align="center"><button name="login" class="btn btn-primary"> Proceed <i class="fa fa-arrow-circle-right"></i> </button>
													 </div>
												</li>
												
												
											<li align = "left">
														<h5 class="over-title margin-bottom-15">  <span class="text-bold">Description</span></h5>
														<p> SmartSwiftPay Gold card Perks </p>
												</li>
												<li align = "left">
													 <h5 class="over-title margin-bottom-15">  <span class="text-bold">Features</span></h5>
													 
													  <ul>
														<li>
															 $500,000 monthly
														</li>
														<li>
															$100,000 daily
														</li>
														<li>
															$50,000 per transaction
														</li>
														 
													 </ul>
												<br/><br/><br/><br/>
											      
												</li>
												
												
												 
											</ul>
											 
										</div>
										 
									 
									</div>
								</div>
							</div>
						</div>
														
														
													</div>
												</div>
											</div>
										 
										 
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<footer>
				<div class="footer-inner">
					<div class="pull-left">
						&copy; <span class="current-year"></span><span>All rights reserved</span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
			<!-- start: OFF-SIDEBAR -->
			
			<!-- end: OFF-SIDEBAR -->
			<!-- start: SETTINGS ->
			<div class="settings panel panel-default hidden-xs hidden-sm" id="settings">
				<button ct-toggle="toggle" data-toggle-class="active" data-toggle-target="#settings" class="btn btn-default">
					<i class="fa fa-spin fa-gear"></i>
				</button>
				<div class="panel-heading">
					Style Selector
				</div>
				<div class="panel-body">
					<!-- start: FIXED HEADER ->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left"> Fixed header</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="fixed-header" />
						</span>
					</div>
					<!-- end: FIXED HEADER ->
					<!-- start: FIXED SIDEBAR ->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left">Fixed sidebar</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="fixed-sidebar" />
						</span>
					</div>
					<!-- end: FIXED SIDEBAR ->
					<!-- start: CLOSED SIDEBAR ->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left">Closed sidebar</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="closed-sidebar" />
						</span>
					</div>
					<!-- end: CLOSED SIDEBAR ->
					<!-- start: FIXED FOOTER ->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left">Fixed footer</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="fixed-footer" />
						</span>
					</div>
					<!-- end: FIXED FOOTER ->
					<!-- start: THEME SWITCHER ->
					<div class="colors-row setting-box">
						<div class="color-theme theme-1">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="theme-1">
									<span class="ti-check"></span>
									<span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
									<span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
								</label>
							</div>
						</div>
						<div class="color-theme theme-2">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="theme-2">
									<span class="ti-check"></span>
									<span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
									<span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
								</label>
							</div>
						</div>
					</div>
					<div class="colors-row setting-box">
						<div class="color-theme theme-3">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="theme-3">
									<span class="ti-check"></span>
									<span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
									<span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
								</label>
							</div>
						</div>
						<div class="color-theme theme-4">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="theme-4">
									<span class="ti-check"></span>
									<span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
									<span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
								</label>
							</div>
						</div>
					</div>
					<div class="colors-row setting-box">
						<div class="color-theme theme-5">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="theme-5">
									<span class="ti-check"></span>
									<span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
									<span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
								</label>
							</div>
						</div>
						<div class="color-theme theme-6">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="theme-6">
									<span class="ti-check"></span>
									<span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
									<span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
								</label>
							</div>
						</div>
					</div>
					<!-- end: THEME SWITCHER ->
				</div>
			</div>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/Chart.js/Chart.min.js"></script>
		<script src="vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/index.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
