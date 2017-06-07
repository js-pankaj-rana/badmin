<?php
require('connection.php');
		$response = "no";
		$result = $con->query("SELECT COUNT(*) AS TemData FROM `user_account`");

		$row = $result->fetch_assoc();
		echo $row['TemData']." rows in table myCity.";


/*		$res =  $result->fetch_row();
		echo '#: ', $res[0];

*/

			$response = "yes";
		

		echo $response;
$con->close();
?>