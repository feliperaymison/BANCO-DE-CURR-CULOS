<?php
include("conexao.php")

if(isset($_POST[OK]))
	$novasenha =(md5(time()), 0, 6);
	$nscripitografada=md5(md5($novasenha));
	$email = $mysqli-> escape_string($_POST['email']);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$erro[]="E-mail invalido."
}

$search = "SELECT idAluno FROM aluno WHERE cpf = '$cpf'";
$sql = "SELECT cpf FROM cpf_alunos WHERE cpf = '$cpf'";
$query = mysqli_query($conn, $sql);
$searching = mysqli_query($conn, $search);
$validations = mysqli_fetch_array($searching);
$valida = mysqli_fetch_array($query);

if($valida==0)
	$erro[]="O email informado não está cadastrado"

if(count($erro)==0){
		if(	mail($email,"Sua nova senha","Sua nova senha :".$novasenha)){

		$sql_code="UPDATE aluno SET senha='$nscripitografada' WHERE email ='$email' "
		$sql_query=$mysqli->query($sql_code) or die($mysqli->error);
}
}
 ?>



<!DOCTYPE html>
<html lang="pt-br" >
	<head>
		<meta charset="utf-8">
		<title>Redefinição de senha</title>
	</head>
	<body>
		<?php
		if ($valida > 0) {
			$_SESSION['cpf'] = $cpf;
			$_SESSION['nome'] = $nome;
			if ($validations == 0) {
				echo "<script>alert('Seja bem vindo, $nome!');</script>";
				echo "<script>location.href='FormularioAluno.php';</script>";
			}else {
				echo "<script>alert('Oops... esse aluno já possui um perfil no sistema :(. Tente usando outro CPF, ou edite seu perfil já existente em Editar Perfil ;)');</script>";
				echo "<script>location.href = 'index.php'</script>";
			}

		}else {
			echo "<script>alert('Esse CPF não pertence a nenhum estudante do IFRO!');</script>";
			echo "<script>location.href='identificaAluno.php';</script>";
		}
		?>
		<form class="" action="" method="post">
			<input placeholder="Seu email:"name="email" type="text">
			<input  name ="OK" value="OK" type="submit">
		</form>
	</body>
</html>
