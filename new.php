<?php session_start();
?>
<!DOCTYPE html>
<header>
	<div>
		<a href="new.html" id="logo"><img src="images/download1.jpg"></a>
	</div>
</header>
<center><body>
	<div><h1>Hello!!</h1></div>
	<?php
	  if(isset($_SESSION["user_id"]))
	  ?>
	<div><h2 style="color: red ;font: bold;">You are Logged in</h2></div>
</body></center>
</html>