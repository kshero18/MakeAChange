<?php
$mysqli = new mysqli("localhost", "root", "", "ngophp");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<!DOCTYPE html>
<header>
	<a href="verfy.php"><img src="images/download1.jpg"></a>
</header>
<center><body>
	<h1 style="color: magenta; font-style: italic;">THESE ARE THE REGISTERED MAIL IDS</h1>
	<?php
if (!$mysqli->multi_query("CALL email_check()")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
do {
    if ($res = $mysqli->store_result()) {
        print("\n\t---\t\n");
        var_dump($res->fetch_all());
        echo "\n\n";
        printf("\n\t");
        $res->free();
        print("\n\t");
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());
				
?>
</body></center>
</html>