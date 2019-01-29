<?php
	include("./includes/connection.php");
	
	//for creating unique id with database checked
    $f = 0;
	$user_id = "1";
	while($f != 1){
		$temp_id = $user_id++;//uniqid("UR");
		//query for checking the uniqueid is exist in table or not
		$sql = "SELECT * FROM user_data WHERE user_id='".$temp_id."'";	
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==0){
			$user_id = $temp_id;
			$f = 1;
		}
	}
	if(isset($_GET["submit"]))
	$user_id = $user_id;
	$email = $_POST["email"];
	$Name = $_POST["Name"];
	$password = $_POST["password"];
	$gender=$_POST["gender"];
	$address=$_POST["address"];
	$mobile=$_POST["mobile"];

	$sql = "INSERT INTO user_data(user_id,Name,gender,address,mobile,email,password) VALUES('".$user_id."','".$Name."','".$gender."','".$address."','".$mobile."','".$email."','".$password."')";
	$q=mysqli_query($con,$sql);
	if($q == 1){
		session_start();	
		$sql = "SELECT * FROM user_data WHERE user_id='".$user_id."'";
		$res = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($res)){
			$_SESSION["user_id"] = $rs["user_id"];
		}
		header("location:profile.html");
	}
	else{
		header("location:./error/insert_error.php");
	}
	mysqli_close($con);
?>
