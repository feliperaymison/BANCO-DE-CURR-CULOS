<?php
session_start();

if(isset($_POST['cargo']) && isset($_POST['especialidade']) && isset($_POST['vaga']) && isset($_POST['periodo']) && isset($_POST['cargahoraria']) && isset($_POST['remuneracao']) && isset($_POST['area'])) {
	//$_POST['nomeficticio']) && isset($_POST['email']) &&
	//$nomeficticio = $_POST['nomeficticio'];
	//$email = $_POST['email'];
	$id = $_SESSION['id'];
	$cargo = $_POST['cargo'];
	$especialidade = $_POST['especialidade'];
	$vaga = $_POST['vaga'];
	$periodo= $_POST['periodo'];
	$cargahoraria = $_POST['cargahoraria'];
	$remuneracao= $_POST['remuneracao'];
	$area = $_POST['area'];

	

	include('connection.php');
    
	$sql = "INSERT INTO `vagas`(`ID_vaga`, `cargo`, `numerovagas`, `cargahoraria`, `especialidade`, `periodo`, `remuneracao`, `ID_empresa`, `area`) VALUES (null,'$cargo','$vaga','$cargahoraria','$especialidade','$periodo','$remuneracao','".$id."', '$area')";

	if ($conn->query($sql) == TRUE) {
echo "<script type='text/javascript'>alert('Vagas Cadastradas com sucesso. Retornando à página de cadastro.');</script>";
	echo "<script>location.href='empresas.php';</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
session_destroy();
?>