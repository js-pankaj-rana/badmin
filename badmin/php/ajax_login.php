<?php
	require('connection.php');
	$response = "no";
	if( isset($_POST["pwdLogin"]) ){	
		$ua_uname = $_POST["unameLogin"];
		$ua_password = $_POST["pwdLogin"];
		
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $ua_uname) ) {
			$result = $con->query("SELECT COUNT(`c_name`) FROM `crm_mpanel` WHERE `c_name`='".$ua_uname."' AND `c_pass`='".$ua_password."'");
			$row = $result->fetch_row();
			if($row[0] == 1){
			$response = "yes";
		}
	}
		
		echo $response;
	}
$con->close();
 ?>
