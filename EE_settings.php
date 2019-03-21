<?php

	$idempresa = $_POST['id'];
	include('connection.php');

	
	
$nomeficticio = $_POST['NomeFicticio'];
	$cnpj = $_POST['CNPJ'];
	$endereco = $_POST['Endereco'];
	$razaosocial = $_POST['RazaoSocial'];
	$ramo = $_POST['Ramo'];
	$email = $_POST['Email'];
	$telefone = $_POST['Telefone'];
	$senha = $_POST['Senha'];
	$celular = $_POST['Celular'];

	$sql = "UPDATE  `empresa` set nome='$nomeficticio', endereco= '$endereco', ramo='$ramo', email= '$email', telefone= '$telefone',cnpj ='$cnpj',  razao= '$razaosocial', senha='$senha', celular='$celular' WHERE Id ='$idempresa'";
	
	
	if ($conn->query($sql) == TRUE) {
echo "<script type='text/javascript'>alert('empresa editada com sucesso! Retornando para a página inicial.');</script>";
echo "<script>location.href='empresas.php';</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	
}
	$conn->close();

	// Create connection


?>