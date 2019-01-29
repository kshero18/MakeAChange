<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Adding Donation</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/download.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div id="header">
		<div>
			<a href="indexmain.php" id="logo"><img src="images/download1.jpg" alt="logo"></a>
			<ul>
				
			</ul>
		</div>
	</div>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./about.php">Its All About Making a Change</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	<li><a href="./home.php">Home</a></li>
      	<li><a href="about.php">About</a></li>
        <li class="active"><a href="./add_donation.php">Donation</a></li>
				<li><a href="adminpanel.php">Admin Panel</a></li>
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>
					<li class="log_btn"><a href="logout.php">Logout</a></li>
				<?php 
					}
					else{
				?>
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
					}
				?>
      </ul>
    </div>
  </div>
</nav>
<body>
	<center><div id="body">
		<div class="donation_div">
			<h3><?php echo $_GET["donate"]; ?> Donation</h3><hr>
			<form action="./insert_donation.php" method="post" class="user">
				<input type="hidden" name="cat" value="<?php echo $_GET['cat'];?>">
				<label>Name</label>
				<input type="text" name="donor_name"><br><br>
				<label>Email</label>
				<input type="email" name="donor_email"><br><br>
				<label>Address</label>
				<textarea name="donor_address" rows="3">
				</textarea><br><br>
				<label>State</label>
				<select id="donor_state" name="donor_state">
					<option value="">Select State</option>
					<?php
						$sql = "SELECT * FROM state";
						$result = mysqli_query($con,$sql);
						while($rs = mysqli_fetch_array($result)){
							?>
							<option value="<?php echo $rs["state_id"]; ?>"><?php echo $rs["state_name"]; ?></option>
							<?php
						}
					?>
				</select><br><br>
				<label>City</label>
				<select id="donor_city" name="donor_city">
					<option value="">Select State First</option>
					<?php
						$sql = "SELECT * FROM city";
						$result = mysqli_query($con,$sql);
						while($rs = mysqli_fetch_array($result)){
							?>
							<option value="<?php echo $rs["city_id"]; ?>"><?php echo $rs["city_name"]; ?></option>
							<?php
						}
					?>
				</select><br><br>
				<label>description</label>
				<textarea name="donor_discription" rows="5">
				</textarea><br><br>
				<label>How we collect your donation? </label>
				<div class="pickup">
					<span><input type="radio" name="pickup" value="M" checked>
					<label>I'll come to the organization</label><br></span>
					<span><input type="radio" name="pickup" value="A">
					<label>Pickup it from my address</label></span>
				</div>
				<input type="submit" value="Donate"><br><br>
			</form>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?></center>
</body>
</html>