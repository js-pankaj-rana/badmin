<?php 
	
	//$sql = "SELECT * from `crm_users` limit 10+$pageNo,10";
	$myPageNo = $pageNo; 
	$pageNo= $pageNo+10;
	echo $pageNo;
	$sql = "SELECT * FROM ( SELECT * FROM `crm_users` ORDER BY `c_id` DESC LIMIT $pageNo, 10) sub ORDER BY `c_id` ASC";

	$res = $con->query($sql);
	if ($res == TRUE) {
	   $result = array();
		while($row = mysqli_fetch_array($res)){
			array_push($result, array("c_id"=> $row[0], "c_name"=> $row[1], "c_mobile"=> $row[2], "c_address"=> $row[3], "c_membership"=> $row[4], "c_regdate"=>$row[8], "c_status"=>$row[9]));
		}
		$json =  json_encode($result);
		file_put_contents('../js/json/allUserList'.$myPageNo.'.json', $json);
		$jsonFile = fopen("../js/json/allUserList".$myPageNo.".json", "r");
		fclose($jsonFile);
	}
?>


<?php 
/*include_once ('connection.php');
	$sql = "SELECT * from `crm_users`";
	$res = $con->query($sql);
	if ($res == TRUE) {
	   $result = array();
		
		while($row = mysqli_fetch_array($res)){
			array_push($result, array("c_id"=> $row[0], "c_name"=> $row[1], "c_mobile"=> $row[2], "c_address"=> $row[3], "c_membership"=> $row[4], "c_regdate"=>$row[8], "c_status"=>$row[9]));
		}

		
		$cjson =  count($result);
		echo $cjson;


		$json =  json_encode($result, 0, 10);
		echo $json;
		//file_put_contents('../js/json/allUserList.json', $json);
		//$jsonFile = fopen("../js/json/allUserList.json", "r");
		//fclose($jsonFile);
	}
$con->close();
*/?>

<?php 
//include_once ('connection.php');
//$sql = "SELECT * FROM ( SELECT * FROM `crm_users` ORDER BY `c_id` DESC LIMIT 10) sub ORDER BY `c_id` ASC";
	//$rowCount = "SELECT COUNT(*) FROM `crm_users`";	
	
	//$resCount = $con->query($rowCount);
	
	
//	$sql = "SELECT * FROM `crm_users` ORDER BY `c_id` DESC";

	//$sql = "SELECT * from `crm_users` LIMIT 10 ORDER BY `c_id` DESC";
	
	/*$res = $con->query($sql);
	$result = array();
	if ($res == TRUE) {
		$rowCount = $res->num_rows;
		if($rowCount >=10){
			$jsonCount = $rowCount/10;
			$jsonMode = $rowCount % 10;
			if( $jsonMode >= 1 ) {
				$jsonCount++;
				$jsonCount = (int)$jsonCount;

			}
			for($i=0; $i<=$jsonCount; $i++){
				//$sqlfetch = "SELECT * from `crm_users` LIMIT 0, 10 ORDER BY `c_id` DESC";
				//$resrow = $con->query($sqlfetch);
				$$i = $i * 10;
				do{
					
					for($j=0; $j <= $$i; $j++){
						array_push($result, array("c_id"=> $row[0], "c_name"=> $row[1], "c_mobile"=> $row[2], "c_address"=> $row[3], "c_membership"=> $row[4], "c_regdate"=>$row[8], "c_status"=>$row[9]));
					}
					echo json_encode($result);

				}
				while( $row = mysqli_fetch_array($res));
				{
					array_push($result, array("c_id"=> $row[0], "c_name"=> $row[1], "c_mobile"=> $row[2], "c_address"=> $row[3], "c_membership"=> $row[4], "c_regdate"=>$row[8], "c_status"=>$row[9]));
				}

							}
		}
	   
		while($row = mysqli_fetch_array($res)){
			array_push($result, array("c_id"=> $row[0], "c_name"=> $row[1], "c_mobile"=> $row[2], "c_address"=> $row[3], "c_membership"=> $row[4], "c_regdate"=>$row[8], "c_status"=>$row[9]));
		}
		$json =  json_encode($result);
		file_put_contents('../js/json/allUserList.json', $json);
		$jsonFile = fopen("../js/json/allUserList.json", "r");
		fclose($jsonFile);
	}
$con->close();	*/
?>