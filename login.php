<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/download.jpg" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<a href="indexmain.php" id="logo"><img src="images/download1.jpg" alt="logo"></a>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./login.php">Join Us</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
      	<li><a href="./indexmain.php">Home</a></li>
				<li><a href="about.php">About</a></li>
        <li><a href="./donate.php">Donate</a></li>
          <li><a href="./adminpanel.php">Admin Panel</a>
        <li class="active"><a href="./login.php">Login</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<body>
	<center><div id="body">
			<div>
				<div class="login_div">
					<h3>Login</h3><br><br><br>
					<form action="./login_check.php" method="post" class="user">
						<label>Email Address</label>
						<input type="email" name="email" required>
						<label>Password</label>
						<input type="password" name="password" required>
						<!--<label class="forgot"><a href="forgot_password.php" style="text-decoration: none">forgot password ?</a></label><br>-->
						<input type="submit" value="Login">
					</form>
				</div>
				<br><br><br>
				<h2>If new user then Register here</h2>
				<div class="register_div">
					<h3>Register</h3><br><br><br>
					<form action="./registration.php" method="post" onsubmit="return checkPassword()" class="user">
						<label>Your Name</label>
						<input type="text" name="Name" required><br><br>
						<label>Gender (Type F or M)</label>
						<input type="text" name="gender" required><br><br>
						<label>Your Address</label>
						<input type="text" name="address" required><br><br>
						<label>Your Mobile number</label>
						<input type="number" name="mobile" required><br><br>
						<label>Email Address</label>
						<input type="email" name="email" required><br><br>
						<label>Password</label>
						<input type="password" name="password" id="password" required><br><br>
						<label>Confirm Password</label>
						<input type="password" name="password" id="password1" required><br><br>
						<input type="submit" name="submit">
					</form>
				</div>
			</div>
	</div>
	<?php	include("./footer.html");	?></center>
</body>
</html>