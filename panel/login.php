
<?php  
 ob_start();
include 'strip.php'; 

 
 
include 'EnClass.php';

 

?>


<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
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
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
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
	<!-- start: BODY -->
	<body class="login"  style="background-color:#161f4d">
	   
	   
	   <!-- start: Whatsapp Button free 
	    <a class="fixedButton" href>
 <div class="roundedFixedBtn"><i class="fa fa-phone"></i></div>
</a>
--> 

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
      "welcomeText":"Hi there!\nHow can I help you?",
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

		<!-- start: LOGIN -->
		<div class="row">
		
		<br/><br/><br/>
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				
				<!-- start: LOGIN BOX -->
				<div class="box-login">
				
					<div class="logo margin-top-30" align="center">
								<img src="assets/images/transfer.png" alt="SmartSwiftPay" width="50" />
							</div>
				
					<form  method="post">
						<fieldset>
							<legend>
								Login
							</legend>
												
							<p>
								Please Enter Email Address and Password.
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Email Address" required>
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password" required>
									<i class="fa fa-lock"></i>
									<a class="forgot" href="forgot">
										I forgot my password
									</a> </span>
							</div>
							<div class="form-actions">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="remember" value="1">
									<label for="remember">
										Keep me Signed in
									</label>
								</div>
								<button type="submit" name="login" class="btn btn-primary pull-right">
									Log me in <i class="fa fa-arrow-circle-right"></i>
								</button>
								
								<br/>
								
									<?php
                                    if (isset($_POST['login'])) {

                                        $user = $_POST['username'];
                                        $pass = $_POST['password'];
                                        
                                        
                                        $enkey = new EnClass();
                                        $result = $enkey->UserLogin($user,$pass);
                                         
                                      
                                       if ($result=='success'){
                                            echo "<br/><br/>";
                                            echo "<div class='alert alert-success'>&nbsp;<b>Login Succesful</b></div>";
                                            header("location:login");
                                           
                                       }else{
                                            echo "<br/><br/>";
                                            echo "<div class='alert alert-danger'>&nbsp;<b>Invalid User Credentials</b></div>";
                                           
                                       }
                                     
                                    
                                    }
                                    ?>
								
								
								
							</div>
							<div class="new-account">
								Don't have an account yet?
								<a href="register"> Create an account </a>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
				 
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: LOGIN BOX -->
			</div>
		</div>
		<!-- end: LOGIN -->
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
	<!-- end: BODY -->
</html>