<?php
$servername = "br330.hostgator.com.br";
	$username = "gesst361_pltform";
	$password = "parede101";
	$dbname = "gesst361_plataforma";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	mysqli_set_charset($conn,"utf8");
?>
