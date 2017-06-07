<?php
require('connection.php');
	if(isset($_POST["email"])){	
		$response = "no";
		$ua_email = $_POST["email"];
		$result = $con->query("SELECT COUNT(`ua_email`) FROM `user_account` WHERE `ua_email`='".$ua_email."'");
		$row = $result->fetch_row();
		if($row[0] == 1){
			$response = "yes";
		}
		echo $response;
	}
$con->close();
?>