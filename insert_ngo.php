<?php
	include("./includes/check_session.php");
	include("./includes/connection.php");
	
	//for creating unique id with database checked
	$f = 0;
	$user_id = "1";
	while($f != 1){
		$temp_id = $user_id++;//uniqid("NS");
		//query for checking the uniqueid is exist in table or not
		$sql = "SELECT * FROM ngo_data WHERE ngo_id='".$temp_id."'";	
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==0){
			$id = $temp_id;
			$f = 1;
		}
	}
	$ngo_name = $_POST["ngo_name"];
	$address = $_POST["address"];
	$ngo_city = $_POST["ngo_city"];
	
	$sql = "INSERT INTO ngo_data(ngo_id,ngo_name,address,city_id) VALUES('".$user_id."','".$ngo_name."','".$address."','".$ngo_city."')";
	$result = mysqli_query($con,$sql);
	if($result == 1){
		header("location:ngo_activities.php");
	}
	else{
		echo "error..".mysqli_error($con);
	}
?>