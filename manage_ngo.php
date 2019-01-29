<?php	include("./includes/check_session.php");	
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
			<a href="index.php" id="logo"><img src="images/download1.jpg" alt="logo"></a>
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
      <a class="navbar-brand" href="./manage_ngo.php">Add an NGO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	<li><a href="./home.php">Home</a></li>
      	<li><a href="about.php">About</a></li>
 
				<li><a href="admin.php">Admin</a></li>
				<li><a href="./ngo_activities.php">NGO Activities</a></li>
				<li><a href="messages.php" allign="centre_allign">Messages</a></li>
				<li class="active"><a href="manage_ngo.php">NGO</a></li>
				<li><a href="manage_faq.php">FAQ</a></li>
				<li><a href="./events.php">Events And Volunteerism</a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
	<center><div id="body">
		<div class="admin_manages">
			<h3>Add NGO</h3><hr>
			<form action="insert_ngo.php" method="post" enctype="multipart/form-data" class="user">
			<label>Name</label>
			<input type="text" name="ngo_name"><br><br>
			<label>Address</label>
			<textarea rows="5" cols="35" name="address"></textarea><br><br>
			<label>state</label>
			<select id="event_state" name="ngo_state">
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
			<label>city</label>
			<select id="event_city" name="ngo_city">
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
			<input type='submit' value='Add'>
			</form>
			<div class="stored">
				<h4>Available NGO</h4><hr>
				<?php
					$sql = "SELECT * FROM ngo_data";
					$result = mysqli_query($con,$sql);
					$count=1;
					while($rs = mysqli_fetch_array($result)){
						?>
						<a>
							<div>
								<span><?php echo $count.") ".$rs['ngo_name']; ?></span>
							</div>
						</a>
						<?php
						$count++;
					}
				?>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?></center>
</body>
</html>