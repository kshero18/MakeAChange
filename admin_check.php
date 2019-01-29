
<?php
	include("./includes/connection.php");
	include("./includes/session_check.php");
	if(isset($_POST["id"]) && isset($_POST["name"])){
		$id = $_POST["id"];
		$name = $_POST["name"];
		
		$sql = "SELECT * FROM admin WHERE name='".$name."'";
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==1){
			session_start();
			while($rs = mysqli_fetch_array($q)){
				$_SESSION["id"] = $rs["id"];
			}
			header("location:admin.php");
		}
		else{
			?>
			<script>
				alert("Invalid name and id!!");
				window.location="adminpanel.php";
			</script>
			<?php
		}
	}
	else{
		header("location:./errors/illigle_operation.php");
	}
	mysqli_close($con);
?>