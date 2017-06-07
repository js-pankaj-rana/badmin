<?php
	require('connection.php');
	if(isset($_GET["pageNo"])){
		$pageNo = $_GET["pageNo"];
	}
 	$response = 0; 
 	if(isset($_POST["activation"])){
 		$count = 10;
    	$uid = $_POST["cid"];
		$sql = "UPDATE `crm_users` SET `c_status` = 1 WHERE `c_id` = '".$uid."'";
		if ($con->query($sql) === TRUE) {
		    	$response = 1;
		    	include('getAllUserDisplay.php');
		    	echo 'User activated successfully';
			}
			else {
			   echo 'Sorry !! User activation  failed, try again !';
			}
		}

  	if(isset($_POST["deactivation"])){
	   	$uid = $_POST["cid"];
		$sql = "UPDATE `crm_users` SET `c_status` = 0 WHERE `c_id` = '".$uid."'";
		if ($con->query($sql) === TRUE) {
		    	$response = 1;
		    	include('getAllUserDisplay.php');
		    	echo 'User de-activated successfully';
			}
			else {
			   echo 'Sorry !! User de-activation failed, try again !';
			}
		}	
	if(isset($_POST["uaddName"])){
		$uid = $_POST["cid"];
		$uAddName = $_POST["uaddName"];
	    $uAddContact = $_POST["uaddContact"];
	    $uAddAddress = $_POST["uaddAddress"];
	    $sql = "UPDATE `crm_users` SET `c_name` = '".$uAddName."', `c_mobile` = '".$uAddContact."', `c_address` = '".$uAddAddress."' WHERE `c_id` = '".$uid."'";
		if ($con->query($sql) === TRUE) {
		    $response = 1;
		    	include('getAllUserDisplay.php');
		    	echo 'Records update successfully';
			}
			else {
			   echo 'Sorry !! Records modification failed, try again !';
			    //echo "Error: " . $sql . "<br>" . $con->error;
			}
	 
 	}
 	unset($_POST['activation']);
 	unset($_POST['deactivation']);
 	unset($_POST['uaddName']);
  $con->close();
?>