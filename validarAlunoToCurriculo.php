<?php 
session_start();

include('conexao.php');

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$sql = "SELECT * FROM aluno WHERE cpf = '$cpf' AND senha = '$senha'";
$query = mysqli_query($conn, $sql);
$aluno = mysqli_fetch_array($query);



if ($aluno) {
	$_SESSION['aluno'] = $aluno["idAluno"];
	echo "<script>alert('Login realizado com sucesso!');</script>";
	echo "<script>location.href='curriculo.php';</script>";

}else {
	echo "<script>alert('Oops... esse aluno não existe, ou não estamos encontrando-o no banco de dados :(. Certifique-se que o CPF e senha forma inseridos corretamente.');</script>";
	echo "<script>location.href='index.php';</script>";
}
?>