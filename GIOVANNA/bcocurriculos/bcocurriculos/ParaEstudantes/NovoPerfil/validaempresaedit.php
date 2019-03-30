<?php 
session_start();


	if(isset($_POST['cnpj']) && isset($_POST['senha']))
	{
		$cnpj = $_POST['cnpj'];
		$senha = $_POST['senha'];

	include('connection.php');

	$sql =  "SELECT Id FROM empresa WHERE cnpj = '$cnpj' AND senha = '$senha'" ;
		 $query = $conn->query($sql);
		 $result = $query->fetch_assoc(); // fetch it first
	if ($conn->query($sql) == TRUE && $result["Id"]!="" ) {
        $_SESSION['id']= (int) $result["Id"];
		include ('editempresa.php');
	} else {
echo "<script type='text/javascript'>alert('empresa não cadastrada, sistema retornando à página inicial.');</script>";
	echo "<script>location.href='empresas.php';</script>";
	}

	$conn->close();

	}





?>
