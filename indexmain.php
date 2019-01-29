<?php
	//session_start();
	include("./includes/check_session.php");
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Make A Change</title>
  <meta charset="utf-8">
  	<link rel="shortcut icon" type="image/l-icon" href="images/download.jpg" />

  <link rel="shortcut icon" type="image/x-icon" href="images/download.png" />
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
      	 <li class="active"><a href="./indexmain.php">Home</a></li>
      	 <li><a href="about.php">About</a></li>
        <li><a href="./donate.php">Donate</a></li>
        <li><a href="./adminpanel.php">Admin Panel</a></li>
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.html">Profile</a></li>
					<li><a href="faq.php">FAQ</a></li>
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
		<div class="header">
			<div>
				<img src="images/hands.jpg" alt="Image" width="1500px" height="600px">
				<div id="tagline">
					<h1>Help People</h1>
					<h3>We are working here always for helping People.</h3>
				</div>
				<div class="section">
					<h2>Organizing seminars, impact studies, workshops, research study and awareness campaign on educational policies, statistics, health, legal issues, women and children developmental activities.</h2>
					<p>
						We Encouraging sustainable agricultural development and organic farming, Establishing unity, integrity and communal harmony, Encouraging adult education among rural masses and slum dwellers, Working for persons with disability.
					</p>
					<a href="about.php" class="first">Learn More About Us</a>
					<a href="login.php">Join Us</a>
				</div>
			</div>
		</div>
		<div class="body">
			<div>
				<div class="figure">
					<a href="gallery.php"><img src="images/people.jpg" alt="Image" class="center"></a>
				</div>
				<div class="news">
					<ul>
						<li>
							<span class="date">Sep 12, 2016</span>
							<h3><a href="news.php">New Join of Children Foundations</a></h3>
							<p>
								more and more foundations are now joining with us "Hope" is a new foundation which is now going to connect with us.
							</p>
						</li>
						<li>
							<span class="date">Sep 12, 2016</span>
							<h3><a href="news.php">Saved elders</a></h3>
							<p>
								some elder homes(read..)
							</p>
						</li>
					</ul>
				</div>
				<div class="help">
					<h2>How To Help</h2>
					<a href="login.php"><img src="images/finger.jpg" alt="Image"></a>
					<h3><a href="login.php">on your single step</a></h3>
					<p>
						stay connected with us, we know the needs of pepole who are poor, disabled. get invloved with us and start helping pepole with your abilities
					</p>
					<span class="link"><a href="login.php">Get Involved</a></span>
				</div>
			</div>
		</div>
	</div>
	<?php	include("./footer.html");	?></center>
</body>
</html>