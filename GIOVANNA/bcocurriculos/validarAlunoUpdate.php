<?php
session_start();

include('conexao.php');


if(isset($_POST['cpf']) && isset($_POST['senha']))
{
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
}
	$sql =  "SELECT * FROM aluno WHERE cpf = '$cpf' AND senha = '$senha'" ;
	$query = $conn->query($sql);
	$result = $query->fetch_assoc(); // fetch it first
	//$id =  "SELECT idAluno FROM aluno WHERE cpf = '$cpf' AND senha = '$senha'" ;
	//$select = $conn->query($id);
	//$_SESSION['usuario'] = $select;
	if ($conn->query($sql) == TRUE && $result["idAluno"]!="" )
	{
		$_SESSION['idAluno'] = $result["idAluno"];
		echo "<script>console.log('IdAluno: ". $_SESSION['idAluno'] . "'');</script>";
	}
	else
	echo "<script>location.href='EditarAluno.php';</script>";
	{
		echo "<script type='text/javascript'>alert('Oops... esse aluno não existe, ou não estamos encontrando-o no banco de dados :(. Certifique-se que o CPF e senha forma inseridos corretamente.');</script>";
		echo "<script>location.href='identificaAluno.php';</script>";
	}
$conn->close();
?>
