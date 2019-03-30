<?php
session_start();

include('conexao.php');

$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$search = "SELECT idAluno FROM aluno WHERE cpf = '$cpf'";
$sql = "SELECT cpf FROM cpf_alunos WHERE cpf = '$cpf'";
$query = mysqli_query($conn, $sql);
$searching = mysqli_query($conn, $search);
$validations = mysqli_fetch_array($searching);
$valida = mysqli_fetch_array($query);

if ($valida > 0)
{
	$_SESSION['cpf'] = $cpf;
	$_SESSION['nome'] = $nome;
}
	if ($validations == 0)
	{
		echo "<script>alert('Seja bem vindo, $nome!');</script>";
		echo "<script>location.href='FormularioAluno.php';</script>";
	}
	else
	{
		echo "<script>alert('Oops... esse aluno já possui um perfil no sistema :(. Tente usando outro CPF, ou edite seu perfil já existente em Editar Perfil ;)');</script>";
		echo "<script>location.href = 'index.php'</script>";
	}

else
 {
	echo "<script>alert('Esse CPF não pertence a nenhum estudante do IFRO!');</script>";
	echo "<script>location.href='identificaAluno.php';</script>";
}
?>
