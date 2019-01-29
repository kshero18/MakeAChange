<?php include("./includes/check_session.php"); 
include("./includes/connection.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Make A Change</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/download.jpg" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div id="header">
		<div>
			<a href="indexmain.php" id="logo"><img src="images/download1.jpg" alt="logo"></a>
	
		</div>
	</div>
<body>
	<center><div id="body">
			<div>
				<div class="login_div">
					<h3>Admin Login</h3><br><br><br>
					<form action="./admin_check.php" method="post" class="admin">
						<label>Admin Id</label>
						<input type="number" name="id" required>
						<label>Name</label>
						<input type="text" name="name" required>
						<!--<label class="forgot"><a href="forgot_password.php" style="text-decoration: none">forgot password ?</a></label><br>-->
						<input type="submit" value="Login">
					</form>
				</div>
				</div>
			</div></center>
</body>
</html>

