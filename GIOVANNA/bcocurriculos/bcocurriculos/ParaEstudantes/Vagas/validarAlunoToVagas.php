<?php 

include('conexao.php');

/*$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$search = "SELECT * FROM aluno WHERE cpf = '$cpf' AND senha = '$senha'";
$result_user = @mysql_query($search) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_user);

if($total) {
	$dados = @mysql_fetch_array($result_id); 
}
if (mysql_num_rows($search) > 0) {
	echo "<INPUT TYPE='hidden' NAME='idEdital' VALUE='<?php echo $id; ?>' />";
	echo "<script>location.href='curriculo.php';</script>";
}else{
	echo "<script>alert('Usuário não cadastrado!\nTente novamente!');</script>";
	//echo "<script>location.href='LoginEstudante.php';</script>";
}

mysql_close();*/

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$sql = "SELECT * FROM aluno WHERE cpf = '$cpf' AND senha = '$senha'";
$query = mysqli_query($con, $sql);
$aluno = mysqli_fetch_array($query)



if ($aluno) {
	echo "<script>alert('Login realizado com sucesso!');</script>";
	while ($aluno = mysqli_fetch_array($query)) {
		$id = $aluno['idAluno'];
		$nome = $aluno['nome'];
		$sexo = $aluno['sexo'];
		$data = $aluno['data_de_nascimento'];
		$cpf = $aluno['cpf'];
		$tel = $aluno['telefone'];
		$email = $aluno['email'];
		$curso = $curso['curso'];
		$ano = $aluno['ano'];
		$senha = $aluno['senha'];
		$objetivo = $aluno['objetivo_prof'];
		$experiencia = $aluno['experiencia_prof'];
		$extensao = $aluno['extensao'];
		$foto = $aluno['foto'];
		$disponivel = $aluno['disponibilidade'];
		$civil = $aluno['status_civil'];
		$bairro = $aluno['bairro'];
	} 
	echo "<script>location.href='EditarAluno.php';</script>";

}else {
	echo "<script>alert('Aluno não encontrado!');</script>";
	echo "<script>location.href='ParaAlunos.php';</script>";
}
?>