<?php	include("./includes/check_session.php");	?>
<!DOCTYPE html>
<html>
<head>
  <title>Make A Change</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/download.jpg" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div id="header">
    <div>
      <a href="indexmain.php" id="logo"><img src="images/download1.png" alt="logo"></a>
    
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
      <a class="navbar-brand" href="#">Help Through Volunteering</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="./home.php">Home</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="./admin.php">Admin</a></li>
         <li class="active"><a href="./ngo_activities.php">NGO Activities</a></li>
        <li><a href="messages.php" allign="centre_allign">Messages</a></li>
        <li><a href="manage_ngo.php">NGO</a></li>
        <li><a href="manage_faq.php">FAQ</a></li>
        <li><a href="./events.php">Events And Volunteerism</a></li>
      </ul>
    </div>
  </div>
</nav>

<center>	<?php	include("./includes/footer.html");	?></center>
</body>
</html>