<?php
session_start();

include('conexao.php');

$cpf = $_POST["cpf"];
$email = $_POST["email"];
$sql = "SELECT * FROM aluno WHERE cpf = '$cpf' AND email = '$email'";
$query = mysqli_query($conn, $sql);
$validations = mysqli_fetch_array($searching);
$valida = mysqli_fetch_array($query);

if ($valida > 0)
{
	$_SESSION['cpf'] = $cpf;
	$_SESSION['email'] = $email;
}

if ($aluno) {
	$_SESSION['aluno'] = $aluno["idAluno"];
	echo "<script>alert('O link para redefinição de senha foi enviado para o seu email');</script>";}
	if ($valida > 0)
	{
		$_SESSION['cpf'] = $cpf;
		$_SESSION['nome'] = $nome;
	}
	if ($validations == 0)
	{
		echo "<script>alert('Seja bem vindo, $nome!');</script>";
		echo "<script>location.href='recupera.html';</script>";
	}
		else {
	echo "<script>alert('Oops... esse aluno não existe, ou não estamos encontrando-o :(. Certifique-se que o CPF e email foram inseridos corretamente.');</script>";
	echo "<script>location.href='index.php';</script>";
}
?>
