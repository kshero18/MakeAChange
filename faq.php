<?php	session_start();	
include("./includes/connection.php");?>
<!DOCTYPE html>
<html>

<head>
  <title>Profile - Make A Change</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/download.jpg"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div id="header">
    <div>
      <a href="indexmain.php" id="logo"><img src="./images/download1.jpg" alt="logo" ></a>
    </div>
  </div>
  <body>
	<center><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./donate.php">Donations</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="./indexmain.php">Home</a></li>
        <li><a href="./about.php">About</a></li>
         <li><a href="./donate.php">Donate</a></li>
         <li><a href="./adminpanel.php">Admin Panel</a>
        </li>
      
           <?php 
          if(isset($_SESSION["user_id"])){
        ?>
          <li><a href="profile.html">Profile</a></li>
          <li class="active"><a href="faq.php">FAQ</a></li>
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
	<div id="body">
		<h3>FAQ(s)</h3><hr>
		<?php
			$sql = "SELECT * FROM faq WHERE answer IS NOT NULL";
			$result = mysqli_query($con,$sql);
			while($rs = mysqli_fetch_array($result)){
				?>
				<div>
					<h3><?php echo $rs['question']; ?></h3>
					<p><?php echo $rs['answer']; ?></p>
				</div>
				<?php
			}
		?>
		<hr>
		<h3>Ask a Question</h3><hr>
		<form action="insert_faq.php" class="user">
			<input type="text" name="faq_que">
			<input type="submit" value="ASK">
		</form>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>