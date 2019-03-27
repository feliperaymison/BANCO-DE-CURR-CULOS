<?php
session_start();

include ('conexao.php');

$id = $_SESSION['idAluno'];
$senha = $_POST['senha'];

$update = "UPDATE aluno SET senha = '$senha' WHERE idAluno = '$id'";

?>
