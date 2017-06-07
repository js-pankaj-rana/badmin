<?php
require('connection.php');
	if(isset($_POST["username"])){	
		$response = "no";
		$ua_uname = $_POST["username"];
		$result = $con->query("SELECT COUNT(`ua_uname`) FROM `user_account` WHERE `ua_uname`='".$ua_uname."'");
		$row = $result->fetch_row();
		if($row[0] == 1){
			$response = "yes";
		}
		echo $response;
	}
$con->close();
?>