	
	<?php  
 ob_start();

include 'strip.php'; 
include 'session.php';

 $enkey = new EnClass();
 
 $btc = $enkey->getBTCValue();

?>

	<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>
						<a class="navbar-brand" href="#">
						 
						</a>
						<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
							<i class="ti-align-justify"></i>
						</a>
						<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="ti-view-grid"></i>
						</a>
					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
					
					
					       <ul class="nav navbar-left">
						
							 		<div class="panel-body no-padding">
											<div class="padding-10">
												 
												<h4 class="no-margin inline-block padding-5"> Transfer Funds to Paypal or Ria </h4>
												<span class="block text-small text-left"> For as little as 0.9%: <?php echo $btc; ?> USD </span>
												 
											</div>

											
											</div>
							
							 
					     </ul>
						
						
						<ul class="nav navbar-right">
							 <?php   
							 
							  $enkey = new EnClass();
                              $result = $enkey->getuserDetails($session_id);
							 
							 ?>
						  
							<!-- start: USER OPTIONS DROPDOWN -->
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/images/avatar.png" alt="image" width="50" height="40" > 
									<span class="username" align="left"><?php echo  $result['fullname'];   ?> <br/><?php echo  $result['email'];   ?> </span>
								</a>
									
								 
								<ul class="dropdown-menu dropdown-dark">
								
									<li>
										<a href="index.html">
											Log Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER OPTIONS DROPDOWN -->
						</ul>
						
					</div>
				 <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							 <i class="ti-angle-down"></i>
						</div>
					<!-- end: NAVBAR COLLAPSE -->
				</header>