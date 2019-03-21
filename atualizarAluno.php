<?php
session_start();

include ('conexao.php');

$id = $_SESSION['idAluno'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data = $_POST['data'];
$bairro = $_POST['bairro'];
$idioma = $_POST['idioma'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tel = $_POST['telefone'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$ano = $_POST['ano'];
$senha = $_POST['senha'];
$data_acesso = date('H:i');
$registro_vagas = 0;
$experiencia = $_POST['experiencia'];
$projetos = $_POST['projetos_de_extensao'];
$objetivo = $_POST['objetivo_profissional'];
$disponivel = $_POST['turno'];
$civil = $_POST['estCivil'];
$escolaridade = "Ensino Fundamental completo";

if (isset($disponivel)) {
	if ($disponivel == "Matutino") {
		$disponivel = "Vespertino";
	}else{
		$disponivel = "Matutino";
	}
}else {
	$sql = "SELECT disponibilidade WHERE idAluno = '$idAluno'";
	$disponivel = mysqli_query($con, $sql);
}

$extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensão do arquivo
$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "uploads/"; //define o diretório para onde enviaremos o arquivo
move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua upload	



$update = "UPDATE aluno SET nome = '$nome', sexo = '$sexo', data_de_nascimento = '$data', cpf = '$cpf', telefone = '$tel', email = '$email', curso = '$curso', ano = '$ano', senha = '$senha', acesso = '$data_acesso', objetivo_prof = '$objetivo', experiencia_prof = '$experiencia', extensao = '$projetos', foto = '$novo_nome', disponibilidade = '$disponivel', escolaridade = '$escolaridade', status_civil = '$civil', bairro = '$bairro', idioma = '$idioma' WHERE idAluno = '$id'";



if (mysqli_query($conn, $update)) {
	echo "<script>alert('Atualização realizada com sucesso!');</script>";
}else{
	echo "Error: " . mysqli_error($conn);
	//echo "<script>alert('Oops... tivemos um problema. :(... Tente novamente!');</script>";
	//echo "<script>location.href = 'javascript:history.back()';</script>";
}

?>
<!DOCTYPE html>
<html lang="pt-BR ">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="imagem/x-icon" href="icone.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>e-Curriculum || Porto Velho Calama</title>
  <!-- arquivos locais
  <link rel="stylesheet" href="material.min.css">
  <script src="material.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  -->
  <!--arquivos online-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>
<style>

.mdl-card{
	align-self:center;
	margin-top:5%;
    margin-bottom:0%;
 	width:100%;
	text-align:center;
	margin-left: auto;
    margin-right: auto;
}
.mdl-card-testo{
	margin-top: 2%;
 	width:60%;
	text-align:left;
	margin-left: 25%;
	position: absolute;
    
}
.mdl-mini-footer .mdl-logo {
    line-height: 0px;

}
.acme-card {
	margin-left: 5%;
	height: 150px;
	width: 200px;
	margin-top:5%;

}
@media screen and (max-width: 500px){
	.mdl-card{
	    width: 100%;
	    margin-top: 10%;
	}
	.acme-card{
		width:70%;
		height: auto;
	}
	.mdl-card-testo{
		width:70%;
		margin-top: 10%;
		position: relative;
		margin-left:5%;
	}
}
@media screen and (max-width: 1920px){
	.mdl-layout__header-row {
	    height: 56px;
	    padding: 0 20px 0 20px;
	}
}
</style>
<body>
    <?php 
    printf("<div class='mdl-layout mdl-js-layout mdl-layout--fixed-header'>
        <header class='mdl-layout__header'>
            <div class='mdl-layout__header-row'>
                <button class='mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon' onclick='history.go(-1);'>
                	<i class='material-icons' style='color:white;'>arrow_back</i>
                </button>
            </div>
        </header>	
	<div>
		<!--- cardzao principal --->
        <div class='mdl-card' style='padding-left: 2em;>
        	<!--- card da imagem--->
        	<div class='mdl-card left'>
        		<img src='uploads/%s' style='width:13em; height:13em;'>
        	</div>
        	<!--- card dos textos --->
        	<div class='mdl-card-testo left'>
				<div class='mdl-card__title'>
					<h4 class='mdl-card__title-text'>Currículo</h4>
			    </div>
		        <form action='index.php'>
					<p><b>Nome:</b> %s</p>
					<p><b>Sexo:</b> %s</p>
					<p><b>Data de Nascimento:</b> %s</p>
					<p><b>E-mail:</b> %s</p>
					<p><b>Telefone:</b> %s</p>
					<p><b>Estado Civil:</b> %s</p>
					<p><b>Bairro em que reside:</b> %s</p>
					<p><b>Idioma Estrangeiro:</b> %s</p>
					<p><b>Disponibilidade:</b> %s</p>
		            <p><b>Curso:</b> Técnico em %s Integrado</p>
					<p><b>Ano/Período:</b> %s</p>
					<hr>
					<p><b>Formação Escolar:</b> %s</p>
					<hr>
					<p><b>Objetivo Porfissional:</b> %s</p>
					<hr>
					<p><b>Experiência profissional:</b> %s</p>
					<hr>
					<p><b>Pesquisa, ensino e extensões:</b> %s</p>
					<button class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored' type='input' style='color:white;'>Sair</button></center>
		        </form>      
            </div>
            <!--Gambiarra pra mostrar todo o texto acima-->
			<div class='' style='margin-bottom:20px'></div>
			<!--sera ajeitado dps-->
	</div>
</div>", $novo_nome, $nome, $sexo, $data, $email, $tel, $civil, $bairro, $idioma, $disponivel, $curso, $ano, $escolaridade, $objetivo, $experiencia, $projetos);

?>

        <button></button>
        </main>
        </div>
        </div>
</div>
</body>
</html>