<?php
include 'EnClass.php';
$enkey = new EnClass();
 
$fnam =  $_REQUEST['fullname'] ;
$email =  $_REQUEST['email'] ;
$pass =  $_REQUEST['pass'] ;
$country =   $_REQUEST['country'] ;
$code =  $_REQUEST['code'] ;

    $email_to = $email;
     $email_subject = "Your One Time Password";
     
     $enkey->Registration($fnam,$email,$pass,$country,$code);
     
     
     
   
	$message =  "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"
                                                                     \"http://www.w3.org/TR/html4/loose.dtd\">
			                                                <html>
			                                                	<head>
			                                                		<meta http-equiv=\"Content-Type\"
			                                                			  content=\"text/html; charset=ISO-8859-1\">
			                                                		<title>$email_subject</title>
			                                                		<style type=\"text/css\">
			                                                			body { background: white; color: black }
			                                                		</style>
			                                                	</head>
			                                                	<body>
			                                                		<div style=\"background: white; padding: 5px\">
			                                                			<img src=\"http://paymentvillage.com/ubcons/images/logo.png\"/>
			                                                		</div>
			                                                		<div style=\"background: white; border: solid 5px white; padding: 3px\">
			                                                			<h3>$email_subject</h3>
			                                                			<table width=\"95%\">
			                                                				<tbody>
			                                                					<tr>
			                                                						<td align=\"right\">".
			                                                							date('d/m/Y h:m:s')
			                                                						."</td>
			                                                					</tr>
			                                                					<tr>
			                                                						<td>
			                                                						  Hello $fnam,
			                                                						</td>
			                                                					</tr>
			                                                					<tr>
			                                                						<td>
			                                                						  Please use code <b>$code</b> to verify your account. <br/>
			                                                						  <br/> <br/> <br/> 
			                                                						  Do not respond to this email.
			                                                						</td>
			                                                					</tr>
			                                                					<tr>
			                                                						 <td>
			                                                							</td>
			                                                					</tr>
			                                                					<tr>
			                                                						<td>
			                                                						    Thank you<br>
			                                                							Smart Swift Pay Team.
			                                                						</td>
			                                                					</tr>
			                                                				</tbody>
			                                                			</table>
			                                                		</div>
			                                                	</body>
			                                                </html>";
										 
										 
										 
										 $from = "PV";
										 $headers = "From:" . $from;
										 $headers = "MIME-Version: 1.0" . "\r\n";
                                         $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
     
	mail($email_to, $email_subject, $message,$headers);
     
	 header("location:verify?pdq=". $email );                
          

?>