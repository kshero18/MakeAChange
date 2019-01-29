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
            <a href="indexmain.php" id="logo"><img src="images/download1.png" alt="logo"></a>
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
          <li><a href="./indexmain.php">Home</a></li>
        <li><a href="./about.php">About</a></li>
        <li class="active"><a href="./admin.php">Admin</a></li>
    <li><a href="ngo_activities.php">NGO Activities</a></li>
    <li><a href="./events.php">Events And Volunteerism</a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "", "ngophp");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP TABLE IF EXISTS admin") ||
    !$mysqli->query("CREATE TABLE admin(id INT,name varchar(20))") ||
    !$mysqli->query("INSERT INTO admin(id,name) VALUES (1,'kshero'), (2,'nigar'), (3,'mamatha')")) {
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->query("DROP PROCEDURE IF EXISTS p") ||
    !$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id,name FROM admin;END;')) {
    echo "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->multi_query("CALL getusers()")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

do {
    if ($res = $mysqli->store_result()) {
        printf("\n\n---\n\n");
        var_dump($res->fetch_all());
        printf("\n\n");
        $res->free();
        printf("\n\n");
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());
				/*require("./includes/connection.php");
			mysqli_select_db($con,"ngophp");
				$con=mysqli_connect();

				$sql = "CALL `getusers`();";
				$result = mysqli_query($con,$sql);
				if (!($result = $con->query("SELECT * FROM user_data;")))
				 {
    echo "SELECT failed: (" . $con->errno . ") " . $con->error;
					while($rs = mysqli_fetch_array($result))
					{
						echo $rs;
					}
				}*/
?>
				<!--$stmt=mysqli_query($con,$sql);
				//$stmt->execute();		
				if(mysqli_num_rows($stmt) >0){
					session_start();
					while($row=mysqli_fetch_array($stmt)){
						print_r($row);
					}
				}else
				{echo "0 results";} -->

				<!--$users=$stmt->fetchAll(PDO::FETCH_ASSOC);
				while($r=$stmt->fetch())
						print_r($users);-->
						<!--<?php
	/*require("./includes/connection.php");
			
			$mysqli = mysqli_connect();
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP PROCEDURE IF EXISTS getusers") ||
    !$mysqli->query('CREATE PROCEDURE getusers() READS SQL DATA BEGIN SELECT * FROM user_data; END;')) {
    echo "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->multi_query("CALL getusers()")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

do {
    if ($res = $mysqli->store_result()) {
        printf("---\n");
        var_dump($res->fetch_all());
        $res->free();
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());*/
?>-->
</body>
</html>
