<?php
	require('connection.php');
	if(isset($_GET["pageNo"])){
		$pageNo = $_GET["pageNo"];
	}
 	$response = 0; 
	if(isset($_POST["uaddName"])){
		$uAddName = $_POST["uaddName"];
	    $uAddContact = $_POST["uaddContact"];
	    $uAddAddress = $_POST["uaddAddress"];
	    $uAddMemb = $_POST["uaddMember"];
	    $sql = "INSERT INTO `crm_users` ( `c_name`, `c_mobile`, `c_address`, `c_membership`, `c_cashier`, `c_secretary`, `c_regdate`) VALUES ('".$uAddName."', '".$uAddContact."', '".$uAddAddress."', '".$uAddMemb."', 'Ramakant Pal', 'Anil Datt Pal', now())";
	   if ($con->query($sql) === TRUE) {
	    $response = 1;
	    include('getAllUserDisplay.php');
	    echo 'Records save successfully';
		}
		else {
		    echo 'Sorry !! Records modification failed, try again !';
		}
	 
 }
  $con->close();
?>