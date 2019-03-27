<?php
	$host = "br330.hostgator.com.br";
	$user = "gesst361_pltform";
	$pass = "parede101";
	$banco = "gesst361_plataforma";
	$conn = mysqli_connect($host, $user, $pass) or die (mysql_error());
	mysqli_select_db($conn, $banco);
	mysqli_set_charset($conn,"utf8");
?>
