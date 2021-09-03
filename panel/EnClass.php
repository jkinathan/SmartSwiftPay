<?php

	class EnClass{
		
		private $connection;
		private $user_name = "smartswift_user";
		private $password = "kampala12345;;";
		private $db_name = "smartswift_db";
		private $host = "localhost";

		public function __construct(){
					$this->connection = new PDO("mysql:host=$this->host; dbname=$this->db_name",$this->user_name,$this->password);
					$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		
 

 

    




    public function UserLogin($username,$password){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select * from sw_accounts a where a.email_address='$username' and a.password='$password'");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
					//check status first_
					if($row['status']=='Y'){
						//check user role id
						 
										session_start();
                     session_regenerate_id();
                     $_SESSION['id'] = $row['account_id'];
                     header('location:dashboard');
										session_write_close();
										
					 
						} else if($row['status']=="N"){
							 
							 echo "<div class='alert alert-danger'>&nbsp;This user has been disabled Please contact Admin to Activate</div>";
                               
									}else if($row['status']=="P"){
							 
							 header("location:verify?pdq='$username'");
                               
									}
	 
				    break;
						}
					  return json_encode($data);
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	
		public function getuserDetails($sess_id){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select a.fullname,a.email_address,a.acc_number, 
			                                    (select new_balance from sw_account_details where user_id = '$sess_id' and account_id in (select max(account_id) from sw_account_details where user_id ='$sess_id' ))  as new_bal 
			                                    from sw_accounts a where account_id = '$sess_id'");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
			$data = array( 'fullname'=> $row['fullname'] ,
			            'email'=> $row['email_address'],
			            'acnum'=> $row['acc_number'].''.$sess_id,
			            'new_bal'=> $row['new_bal']
			);
				    break;
						}
					  return $data;
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	
	
	  public function VerifyUser($email,$code){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select * from sw_accounts a where a.email_address='$email' and a.act_code='$code'");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if($stmt->rowCount()>0){
			    	return 'success';
						
			}else{
				return 'fail';
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	
	 public function VerifyAccountNo($accnum){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select * from sw_accounts a where concat(a.acc_number,a.account_id)  = '$accnum'");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if($stmt->rowCount()>0){
			    		while($row=$stmt->fetch()){
			$data = array( 'fullname'=> $row['fullname'] ,
			            'user_id'=> $row['account_id'],
			            'acnum'=> $row['acc_number'].''.$row['account_id']
			
			);
				    break;
						}
					  return $data;
						
			}else{
				return 'fail';
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	
	 public function CheckDuplicateEmail($email){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select * from sw_accounts a where a.email_address='$email'");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if($stmt->rowCount()>0){
			    	return 'success';
						
			}else{
				return 'fail';
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	
	
	
	 public function UpdateStatus($email){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("update sw_accounts set status = 'Y' where email_address='$email' ");
		
			$stmt->execute();
		
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	
	  public function Registration($fullname,$email_address,$password,$country,$act_code){
	      
	  
	              try{	
		           $stmt = $this->connection->prepare("INSERT INTO sw_accounts(fullname,email_address,password,status,country,act_code,acc_number) 
								VALUES(:fullname, :email_address, :password,:status,:country,:act_code,:acc_number)");
                 
                 $status = 'P' ;  
                 $acc_number = rand(100000,999999) ;
                 
				   $stmt->bindParam("fullname", $fullname);
				   $stmt->bindParam("email_address", $email_address);
				   $stmt->bindParam("password", $password);
				   $stmt->bindParam("status", $status);                                                      
                   $stmt->bindParam("country", $country);
                   $stmt->bindParam("act_code", $act_code); 
                   $stmt->bindParam("acc_number", $acc_number); 
				  				 
				   $result = $stmt->execute();
				   if($result){
					   return 'success';
				   }else{
					   return 'fail';
				   }
				
				   
			}catch(PDOException $e){
				 return $e->getMessage(); 
					}
	          
	     
			
      
					
			
		}




        public function getBTCValue(){
		 
		  // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://api.coindesk.com/v1/bpi/currentprice/USD.json");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

       
        $a = json_decode($output, true);
        // close curl resource to free up system resources
        
        // var_dump ($a);
         
       
        curl_close($ch);   
        return    $a['bpi']['USD']['rate_float'];
    					
    	}

	
	    public function Add_Log($action_code, $audit_details, $user_id){
                 try{	
				 
				 	 
		            // $password_hash = PassHash::hash($password);
			       $stmt = $this->connection->prepare("INSERT INTO sw_audit_trail(action_code, audit_details,  user_id) 
                    VALUES(:action_code,:audit_details,:user_id)");                                                                                                             
				   $stmt->bindParam("action_code", $action_code);
                   $stmt->bindParam("audit_details", $audit_details);
                   $stmt->bindParam("user_id", $user_id); 
                  
				   $result = $stmt->execute();
				   
				   if($result){
					   return 'Success';
				   }else{
					   return 'Fail';
				   }
								  
		      }catch(PDOException $e){
			return $e->getMessage();
		 }
			
		}
		
		
	  
		
		
		 public function NewTransfer($user_id,$details, $account_balance,$amount,$new_balance,$from_account){
                 try{	
				 
		 
			       $stmt = $this->connection->prepare("INSERT INTO sw_account_details(user_id,account_details,account_balance,amount,new_balance,from_account) 
                    VALUES(:user_id, :account_details, :account_balance,:amount,:new_balance,:from_account)");                                                                                                             
				  
				  
				   $stmt->bindParam("user_id", $user_id);
                   $stmt->bindParam("account_details", $details);
                   $stmt->bindParam("account_balance", $account_balance); 
                   $stmt->bindParam("amount", $amount);
                   $stmt->bindParam("new_balance", $new_balance);
                   $stmt->bindParam("from_account", $from_account); 
                  
				   $result = $stmt->execute();
				   
				   if($result){
					   return 'success';
				   }else{
					   return 'fail';
				   }
								  
		      }catch(PDOException $e){
			return $e->getMessage();
		 }
			
		}



 public  function getTransactionStatement($sess_id){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select * from sw_account_details where user_id='$sess_id' and account_details in ('MONEY_TRANSFER_OUT','MONEY_TRANSFER_IN') order by action_date desc limit 10");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
        array_push($data,
			      array( 'account_details'=> $row['account_details'], 
			               'amount'=> $row['amount'],
			               'action_date'=> $row['action_date'],
			               'from_account'=> $row['from_account'] ));
            
						}
					  
					return json_encode($data);	
			}else{
				return "empty";
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
 
 

    
	

	public function getTransactionCount($sess_id){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare(" select count(1) as tcount from cp_transactions where mobile_num in 
			 (select mobile_num from cp_login where login_id = '$sess_id') and status_code='S'");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
			$data = array( 'count'=>(int)$row['tcount'] );
				    break;
						}
					  return json_encode($data);
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	
	
	
	
	public function getProjectCount(){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select count(1) as tcount from ub_projects where archived_status = 'N' ");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
			$data = array( 'count'=>(int)$row['tcount'] );
				    break;
						}
					  return json_encode($data);
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	public function getPendingProjectCount(){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select count(1) as tcount from ub_project_req_resp where admin_req_status not in ('Tentative','Paid') ");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
			$data = array( 'count'=>(int)$row['tcount']);
				    break;
						}
					  return json_encode($data);
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	public function getApprovedProjectCount(){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select count(1) as tcount from ub_project_req_resp where admin_req_status in ('Tentative','Paid') ");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
			$data = array( 'count'=>(int)$row['tcount'] );
				    break;
						}
					  return json_encode($data);
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
    public function getTotalProjectAmount(){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare("select sum(alloted_amount) as tamount from ub_projects");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
			$data = array( 'amount'=>(int)$row['tamount'] );
				    break;
						}
					  return json_encode($data);
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}

	
	
	//	public function getTotalAmountReceived($sess_id){
	//	 $data = array();
	//	 try{
	//		$stmt = $this->connection->prepare("select sum(transaction_amount) as tamonut from cp_transactions where mobile_num in 
	//		 (select mobile_num from cp_login where login_id = '$sess_id') and status_code='S'");
	//	
	//		$stmt->execute();
	//		$stmt->setFetchMode(PDO::FETCH_ASSOC);
	//		if(!$stmt->rowCount()==0){
	//			while($row=$stmt->fetch()){
	//		$data = array( 'amount'=>(int)$row['tamonut'] );
	//			    break;
	//					}
	//				  return json_encode($data);
	//					
	//		}else{
	//			return null;
	//		}
	//		
    //       			
	//	  }catch(PDOException $e){
	//	  } 
					
	//}

 

 /* GET ALL REQUESTS METHODS HERE*/
 
 //Accountant Details

 public function RequestsToMeAdmin(){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare(" select a.request_date,
								                    a.request_id,
													  b.project_name,
													  b.alloted_amount,
													  a.approver1_id,
													  a.approver2_id,
								                      (select SUM(budget_line_amount) from ub_request_budget_lines where request_id = a.request_id) as alloted,
													  (select CONCAT(user_fname, ' ', user_lname) from ub_users where user_id = a.requestor_id) as requestor,
                                                      (select email_address from ub_users where user_id = a.requestor_id) as email,
													  (select CONCAT(user_fname, ' ', user_lname) from ub_users where user_id = b.project_manager) as project_manager,
													  (select user_id from ub_users where user_id = b.project_manager) as theapprover1_id,
													  (select CONCAT(user_fname, ' ', user_lname) from ub_users where user_id = b.first_line_approver) as approver,
													  (select user_id from ub_users where user_id = b.first_line_approver) as theapprover2_id 
								from ub_project_req_resp a left join ub_projects b on a.project_id = b.project_id ");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
			$data = array( 'request_id'=>$row['request_id'], 
			               'request_date'=>$row['request_date'],
						   'project_name'=>$row['project_name'],
						   'alloted_amount'=>$row['alloted_amount'],
						   'approver1_id'=>$row['approver1_id'],
						   'approver2_id'=>$row['approver2_id'],
						   'alloted'=>$row['alloted'],
						   'requestor'=>$row['requestor'],
						   'email'=>$row['email'],
						   'project_manager'=>$row['project_manager'],
						   'theapprover1_id'=>$row['theapprover1_id'],
						   'approver'=>$row['approver'],
						   'theapprover2_id'=>$row['theapprover2_id']);
				    break;
						}
					  return json_encode($data);
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
	public function RequestsByMeAdmin($sess_id){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare(" select count(1) as tcount from cp_transactions where mobile_num in 
			 (select mobile_num from cp_login where login_id = '$sess_id') and status_code='S'");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
			$data = array( 'count'=>(int)$row['tcount'] );
				    break;
						}
					  return json_encode($data);
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
	
		public function PastRequestsAdmin($sess_id){
		 $data = array();
		 try{
			$stmt = $this->connection->prepare(" select count(1) as tcount from cp_transactions where mobile_num in 
			 (select mobile_num from cp_login where login_id = '$sess_id') and status_code='S'");
		
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if(!$stmt->rowCount()==0){
				while($row=$stmt->fetch()){
			$data = array( 'count'=>(int)$row['tcount'] );
				    break;
						}
					  return json_encode($data);
						
			}else{
				return null;
			}
			
           			
		  }catch(PDOException $e){
		  } 
					
	}
	
 //Project Manager Details



















function Mail_Activation_Code($mailto,$fullname,$actcode){

$to = $mailto;
$subject = "Your Activation Code";
$management = "Smart Swift Team";

$message = 
		"<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"
                      \"http://www.w3.org/TR/html4/loose.dtd\">
			<html>
				<head>
					<meta http-equiv=\"Content-Type\"
						  content=\"text/html; charset=ISO-8859-1\">
					<title>$subject</title>
					<style type=\"text/css\">
						body { background: white; color: black }
					</style>
				</head>
				<body>
					<div style=\"background: white; padding: 5px\">
						<img src=\"https://scontent-lhr3-1.xx.fbcdn.net/v/l/t1.0-1/c26.26.322.322/s160x160/154398_502892609744114_1421561808_n.jpg?oh=ffcb52603dedaada3accd7f6d2f0581a&oe=5816A5B6\"/>
					</div>
					<div style=\"background: white; border: solid 5px white; padding: 3px\">
						<h3>$subject</h3>
						<table width=\"95%\">
							<tbody>
								<tr>
									<td align=\"right\">".
										date('d/m/Y h:m:s')
									."</td>
								</tr>
								<tr>
									<td>
									  Hello $fullname,
									</td>
								</tr>
								<tr>
									<td>
									Please use <b>$actcode</b>.
									  
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
										$management
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</body>
			</html>";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: UBCONSULT LTD  <admin@ubconsulting.com>' . "\r\n";

mail($to,$subject,$message,$headers);
} 
	


}  //the ending




	
	
	 
	
	
	