<?php	
	include("./includes/check_session.php");
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
  <title>Make A Change</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="./images/download.jpg" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div id="header">
		<div>
			<a href="indexmain.php" id="logo"><img src="./images/download1.jpg" alt="logo"></a>
		</div>
	</div>
<body style="background-image: url('hands.jpg');">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Help Through Volunteering</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	 <li><a href="./indexmain.php">Home</a></li>
      	  <li><a href="about.php">About</a></li>
      	  <li><a href="./admin.php">Admin</a></li>
        <li><a href="./ngo_activities.php">NGO Activities</a></li>
        <li><a href="messages.php" allign="centre_allign">Messages</a></li>
				<li><a href="manage_ngo.php">NGO</a></li>
				<li><a href="manage_faq.php">FAQ</a></li>
				<li class="active"><a href="current">Events And Volunteerism</a></li>
      </ul>
    </div>
  </div>
</nav>
<script>
		$(document).ready(function(){
			$("#event_state").change(function(){
				var state = $("#event_state").val();
				$("#event_city").load("getCity.php?state="+state);
			});
		});
	</script>

	<div id="body">
		<div class="admin_manages">
			<h3 align="center">ADD EVENT</h3><hr>
			<form action="insert_event.php" method="post" enctype="multipart/form-data" class="user">
			<center><label>Event Name</label>
			<input type="text" name="event_name"><br><br>
			<label>Description</label>
			<textarea name="event_description" rows="5"></textarea><br><br>
			<label align="center">Date</label>
			<input type="date" name="event_date"><br><br>
			<label align="center">Time</label>
			<input type="time" name="event_time"><br><br>
			<label align="center">Address</label>
			<textarea name="event_address" rows="3"></textarea><br><br>
			
			<label>Poster</label>
			<input type="file" name="fileToUpload"><br><br>
			<label>State</label>
			<select id="event_state" name="event_state">
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
			<select id="event_city" name="event_city">
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
			<label>Duration</label>
			<input type="text" name="event_duration">
			<input type="submit" value="Add Event"></center>
			</form>
			<center><div class="stored">
				<h4>Added Events</h4><hr>
				<?php
					$sql = "SELECT * FROM event ORDER BY date DESC";
					$result = mysqli_query($con,$sql);
					$count=1;
					while($rs = mysqli_fetch_array($result)){
						if($count<=4){
						?>
						<a>
							<div>
								<span><?php echo $rs['event_name']; ?></span><br><br>
								<img src="<?php echo "./".$rs['image']; ?>" height= 200px width=500px>
							</div>
						</a>
						<?php
						}
						$count++;
					}
				?>
			</div>
		</div>

	<center><?php	include("./includes/footer.html");	?></center>
</body>
</html>