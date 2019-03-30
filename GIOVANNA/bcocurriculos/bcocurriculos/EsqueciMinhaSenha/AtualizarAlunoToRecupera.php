<?php
session_start();

include ('conexao.php');

$id = $_SESSION['idAluno'];
$senha = $_POST['senha'];
$update = "UPDATE aluno SET senha = '$senha' WHERE idAluno = '$id'";
if (mysqli_query($conn, $update)) {
	echo "<script>alert('Atualização realizada com sucesso!');</script>";
}else{
	echo "Error: " . mysqli_error($conn);
	//echo "<script>alert('Oops... tivemos um problema. :(... Tente novamente!');</script>";
	//echo "<script>location.href = 'javascript:history.back()';</script>";
}
?>
