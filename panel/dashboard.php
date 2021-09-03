<!DOCTYPE html>

<?php  
 ob_start();
include 'strip.php'; 

 
 
include 'EnClass.php';
include 'session.php';
  $enkey = new EnClass();

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
		
        	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
	</head>
	<!-- end: HEAD -->
	<body>
	    
	    
	    	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="73c3ca28-eddb-436c-add3-97698769a8b4";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>


<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?67347';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"20",
      "marginBottom":"20",
      "marginRight":"50",
      "position":"left"
  },
  "brandSetting":{
      "brandName":"Smart Swift Pay",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"",
      "welcomeText":"Hi there!¥nHow can I help you?",
      "messageText":"Hello, I have a question about Smart Swift Pay",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"14062851524"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
	    
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
							<li class="active open">
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
							<li>
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
							<li>
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
						<div align="center">
						 	<!--	<img src="assets/images/logo_img.jpeg" width="220" height="150"/> -->
							
						</div>
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
					
					
						<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
														
							<div class="row">
							
							<div class="alert alert-block alert-warning fade in">
														 
								<h4 class="alert-heading margin-bottom-10"><i class="ti-alert"></i> Warning!</h4>
								<p class="margin-bottom-10">
								In compliance with US AML law, all our investors are required to complete our KYC form
								</p>
								<p>
									<a href="#" class="btn btn-warning">
										Continue
									</a>
									<a href="#" class="btn btn-o btn-warning">
										Dismiss
									</a>
								</p>
							</div>
							
							
								<div class="col-sm-7"> 
									<h4 class="alert-heading margin-bottom-10">Financial Overview </h4>
								</div>
								<div class="col-sm-5">
									<!-- start: MINI STATS WITH SPARKLINE -->
									<ul class="mini-stats pull-right">
										 
										 <a class="btn btn-wide btn-green" href="#"><i class="fa fa-plus"></i> Add Account</a>
										 <a class="btn btn-wide btn-primary" href="#"><i class="fa fa-clipboard"></i> Make Payment</a>
										 
									</ul>
									<!-- end: MINI STATS WITH SPARKLINE -->
								</div>
							</div>
						</section>
						<!-- end: DASHBOARD TITLE -->
						<!-- start: FEATURED BOX LINKS -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
							    
							    
							    
							  	<div class="col-sm-12">
									<div class="col-md-7 col-lg-6">
									    
									    
									    	<div class="col-md-12">
											<div class="panel panel-white no-radius">
												<div class="panel-body padding-20 text-center">
													<div class="space10">
													    <?php
													     $result = $enkey->getuserDetails($session_id);
													     
													     ?>
													  
												<h2 class="no-margin"><small>A/C No.</small><b><?php echo  $result['acnum'];   ?></b></h2>
											  
													</div>
													  
													 
												</div>
											</div>
										</div>
										
								<div class="col-md-6">
											<div class="panel panel-white no-radius">
												<div class="panel-body padding-20 text-center">
													<div class="space10">
														<h5 class="text-dark no-margin">Total Balance</h5>
														
													<br/>
												<div class="partition-light-grey padding-15 text-center margin-bottom-20">
												    
												    
													     
												<h2 class="no-margin"><small>$</small><?php  echo number_format((float) $result['new_bal'], 2, '.', ''); ?></h2>
											 
											</div>
													</div>
													 	<div class="cl-effect-13">
																			<a href>
																				Fund Wallet
																			</a>
																		</div>
													 
												</div>
											</div>
										</div>
								 
								 
							<div class="col-md-6">
											<div class="panel panel-white no-radius">
												<div class="panel-body padding-20 text-center">
													<div class="space10">
														<h5 class="text-dark no-margin">Activate your Card</h5>
														
													<br/>
												<div class="partition-white padding-10 text-center margin-bottom-10">
												<span class="fa-stack fa-2x"> <i class="fa fa-credit-card fa-stack-2x text-primary"></i>
												<i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
												</div>
													</div>
													 	<div class="cl-effect-13">
																			<a href>
																				Get Started
																			</a>
																		</div>
													 
												</div>
											</div>
										</div>
									</div>
									
								<div class="col-sm-6">
									<div class="alert alert-block alert-info fade in">
														 
														<h4 class="alert-heading margin-bottom-10">Features of the newly updated SmartSwiftPay portal</h4>
														<p class="margin-bottom-10">
													 <ul>
														<li>
															Instant withdrawal processing.(Your withdrawal request will be delivered to your preferred destination in no less than 1 minute)
														</li>
														<li>
															Bitcoin withdrawal now enable(You can now place withdrawals bitcoin to your bitcoin wallet and have it delivered instantly).
														</li>
														<li>
															Automatic card activation(Your card is automatically activated immediately in less than 2seconds of payment registeration)
														</li>
														<li>
															International bank transfers now enabled.(You can now make withdrawal or transfer to any bank account in the world from your smartswiftpay account)
														</li>
														
														<li>
															You can opt to participate in the one time charges fee.
														</li>
													 </ul>
													 
													 

														</p>
														<br/>
														<p>
															 
															<a href="#" class="btn btn-o btn-info">
																View Card Plan
															</a>
														</p>
													</div>
								</div>
							</div>
							</div>
						</div>
						<!-- end: FEATURED BOX LINKS -->
						<!-- start: FIRST SECTION -->
						<div class="container-fluid container-fullw padding-bottom-10">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-md-7 col-lg-6">
											<div class="panel panel-white no-radius" id="visits">
												<div class="panel-heading border-light">
													<h4 class="panel-title"> Transaction History </h4>
													 
														<?php  
										
					                                	$gconnect = mysqli_connect("localhost", "smartswift_user", "kampala12345;;", "smartswift_db");  
					                                	$gquery = "select DATE_FORMAT(action_date,'%d/%m/%Y') as TDATE,count(1) as COUNTED
                                                                            from sw_account_details where user_id = '$session_id'
                                                                            group by DATE_FORMAT(action_date,'%d/%m/%Y')
                                                                            order by DATE_FORMAT(action_date,'%d/%m/%Y') asc 
                                                                            limit 10";  
					                                	$gresult = mysqli_query($gconnect, $gquery);  
					                                	?> 
						
													<script>
													    
													    google.charts.load('current', {packages: ['corechart', 'line']});
                                                        google.charts.setOnLoadCallback(drawBackgroundColor);
                                                        
                                                        function drawBackgroundColor() {
                                                              var data = new google.visualization.DataTable();
                                                              data.addColumn('string', 'X');
                                                              data.addColumn('number', 'Transactions');
                                                        
                                                              data.addRows([
                                                                  
                                                               
                                                                  
                                                                   <?php  
                    				                            	while($grow = mysqli_fetch_array($gresult))  
                    				                            	{  
                    				                            	 
                    				                            		echo "['".$grow["TDATE"]."', ".$grow["COUNTED"]."],"; 
                    				                            	}  
                    				                            ?>  
                                                              
                                                              ]);
                                                        
                                                              var options = {
                                                                hAxis: {
                                                                  title: 'Date'
                                                                },
                                                                vAxis: {
                                                                  title: 'Transactions'
                                                                },
                                                                backgroundColor: '#f1f8e9'
                                                              };
                                                        
                                                              var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                                                              chart.draw(data, options);
                                                            }
													    
													    
													</script>
													
													
												</div>
												<div collapse="visits" class="panel-wrapper">
													<div class="panel-body">
														<div class="height-100">
														 
														
														 <div id="chart_div"></div>
														
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-5 col-lg-6">
											<div class="panel panel-white no-radius">
												<div class="panel-heading border-light">
													<h4 class="panel-title"> Transfer Funds To </h4>
												</div>
												<div class="panel-body">
													 
												 
													<div class="row">
													<div class="col-md-6">
													    <form method="post">
														<div class="form-group">
															<label class="control-label">
																Enter Amount <span class="symbol required"></span>
															</label>
															<div class="input-group">
																<input type="number" name="amount" class="form-control" required>
																<span class="input-group-addon">USD</span>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">
																Transfer To: <span class="symbol required"></span>
															</label>
															<input class="form-control tooltips" type="text" name="accountnum" data-placement="top" placeholder="Account Number" required>
														</div>
														
														<button class="btn btn-primary btn-wide pull-right" type="submit" name="transfer" >
															Transfer <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
														  
													
													
													
													</form>	 
												  </div>
										
										 <?php
                                                             if (isset($_POST['transfer'])) {
                                                                 
                                                                   $enkey = new EnClass();
                                                                   
                                                                 $new_amount =   $_POST['amount'] ;
                                                                 $account_no =  $_POST['accountnum'] ;
                                                                 $current_balance = $result['new_bal'];
                                                                 $from_ac = $result['acnum'];
                                                                  
                                                                  $account_check = $enkey->VerifyAccountNo($account_no);
                                                                  
                                                                  if($account_check=="fail"){
                                                                      
                                                                      echo '<script type="text/javascript">toastr.error("Invalid Account Number Provided")</script>';
                                                                      
                                                                  }else if($new_amount>$current_balance){
                                                                  
                                                                     
                                                                       echo '<script type="text/javascript">toastr.error("You have Insufficient Account Balance")</script>';
                                                                  
                                                                  }else{
                                                                     
                                                                      $new_balance = $current_balance - $new_amount;
                                                                      $detailed = 'MONEY_TRANSFER_OUT';
                                                                      $initiate_transfer = $enkey->NewTransfer($session_id,$detailed, $current_balance,$new_amount,$new_balance,$account_no);
                                                                      
                                                                      if($initiate_transfer=="success"){
                                                                        $receiver_id = $account_check['user_id'];
                                                                        $receiver_details = $enkey->getuserDetails($receiver_id);
                                                                        
                                                                        $receiver_balance = $receiver_details['new_bal'];
                                                                        $new_balance = $receiver_balance + $new_amount;
                                                                         $detailed = 'MONEY_TRANSFER_IN';
                                                                         $enkey->NewTransfer($receiver_id,$detailed, $receiver_balance,$new_amount,$new_balance,$from_ac);
                                                                         
                                                                             
                                                                             echo '<script type="text/javascript">toastr.success("Successfully Submitted, Pending Verification")</script>';
                                                                            
                                                                             // echo '<script type="text/javascript">window.location.reload();</script>';
    
                                                                        
                                                                      }else{
                                                                           echo "<br/>";
                                                                      echo "<div class='alert alert-danger'>&nbsp;<b>An Error Occured Trying to Transfer</b></div>";
                                                                      }
                                                                      
                                                                       
                                                                  }
                                                                  
                                                             
                                                             }
                                                             ?>
												</div>
												</div>
											</div>
											
											
										 
											
											
											
											
										 <div class="col-md-5 col-lg-12">
											<div class="panel panel-white no-radius">
												<div class="panel-heading border-light">
													<h4 class="panel-title"> Recent Transactions </h4>
												</div>
													<div class="panel-body">
										
											<?php 
										 $trans_check = $enkey->getTransactionStatement($session_id);
										 
										 if($trans_check =="empty"){
										     
										     ?>
										     <div class="partition-light-grey padding-15 text-center margin-bottom-20">
												<h5 class="no-margin">Heads up! No transaction has been recorded in this account</h5>
												 
											    </div>
										     
										     <?php
										     
										 }else{
										     
										      ?>
										      
										  
											
											<div  id="collapseOne">
														<div class="panel-body no-padding partition-light-green">
															<table class="table">
															    
															    <thead>
															        <tr>
															            
																		<td class="left"><b>Date/Time</b></td>
																		<td class="left"><b>Description</b></td>
																		<td class="left"><b>From/To Account No.</b></td> 
																		<td class="left"> </td> 
																		<td class="left"><b>Amount</b></td>
																		
																	</tr>
															        
															    </thead>
																<tbody>
																    
																    <?php 
																     
                                                                     $trans_check =  json_decode($enkey->getTransactionStatement($session_id));
                                     
									  
																    foreach($trans_check as $trans_result){  
																        
																      
																    
																     ?>
																   
																	<tr>
																		<td class="left"> <?php echo $trans_result->action_date; ?> </td>
																		<td class="left"> <?php echo $trans_result->account_details; ?> </td>
																		<td class="left"> <?php echo $trans_result->from_account; ?> </td> 
																		<td class="right">
																		   <?php if($trans_result->account_details =="MONEY_TRANSFER_OUT"){
																		       ?>
																		         	<i class="fa fa-caret-down text-red"> 
																		       <?php
																		   } else{
																		     ?>
																		     	<i class="fa fa-caret-up text-green"> 
																		     <?php
																		       
																		   }
																		   
																	         ?>
																		
																		</td> 
																		<td class="left"> <h5> <?php echo $trans_result->amount; ?> </h5></td>
																	</tr>
																	
																	<?php
																    
																    }  
																    
																     ?>
																 
																 
																</tbody>
															</table>
														</div>
													</div>
										      
										     
										     <?php
										     
										 }
										
										?>
										
										     
									
											
											
											 
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
					<!-- end: FIXED FOOTER->
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
			</div-->
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
