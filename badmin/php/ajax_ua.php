<?php
	require('connection.php');
 	$response = 0;
	if(isset($_POST["username"])){
		$name = $_POST["name"];
	    $gender = $_POST["gender"];
	    $email = $_POST["email"];
	    $nickname = $_POST["username"];
	    $password = md5($_POST["password"]);
	    $age = $_POST["age"];
	    $state = $_POST["state"];
	    $sql = "INSERT INTO `user_account` ( `ua_name`, `ua_email`, `ua_uname`, `ua_state`, `ua_gender`, `ua_agestatus`, `ua_password`, `ua_regdate`) VALUES ('".$name."', '".$email."', '".$nickname."', '".$state."', '".$gender."', '".$age."', '".$password."', now())";
	   if ($con->query($sql) === TRUE) {
	    $response = 1;
		session_start(['cookie_lifetime' => 86400]);
		$_SESSION['name'] = $name;
		$_SESSION['username'] = $nickname;
		$_SESSION['password']   = $password;
		}
		else {
		    echo "Error: " . $sql . "<br>" . $con->error;
		}
	 
	 $useraccount = array(
	 	'nickname' => $nickname,
	 	'name'	=> $name,
	 	'email' => $email
	 	);
	 $opt = json_encode($useraccount);
	 echo $opt;

	    $name = '';
	    $gender = '';
	    $email = '';
	    $nickname = '';
	    $password = '';
	    $age = '';
	    $state = '';
 }

  $con->close();
?>