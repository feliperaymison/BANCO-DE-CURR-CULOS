<?php
session_start();
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
	background: url('https://tfirdaus.github.io/mdl/images/laptop.jpg') center / cover;
}
.left {
	float: left;
  	padding-right: 3em;
  	padding-top: 0.3em;
  	padding-bottom: 0.3em;
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

	include ('conexao.php');
	//$_SESSION['usuario'] = $id;
	$id = $_SESSION['aluno'];
	$select = mysqli_query($conn, "SELECT * FROM aluno WHERE idAluno = '$id'");


	while ($aluno = mysqli_fetch_array($select)) {
		$id = $aluno['idAluno'];
		$nome = $aluno['nome'];
		$sexo = $aluno['sexo'];
		$data = $aluno['data_de_nascimento'];
		$cpf = $aluno['cpf'];
		$tel = $aluno['telefone'];
		$email = $aluno['email'];
		$curso = $aluno['curso'];
		$ano = $aluno['ano'];
		$senha = $aluno['senha'];
		$objetivo = $aluno['objetivo_prof'];
		$experiencia = $aluno['experiencia_prof'];
		$extensao = $aluno['extensao'];
		$foto = $aluno['foto'];
		$disponivel = $aluno['disponibilidade'];
		$civil = $aluno['status_civil'];
		$bairro = $aluno['bairro'];
		$idioma = $aluno['idioma'];
		$escolaridade = $aluno['escolaridade'];
		$projetos =  $aluno['extensao'];
	}


    printf("<div class='mdl-layout mdl-js-layout mdl-layout--fixed-header'>
        <header class='mdl-layout__header'>
            <div class='mdl-layout__header-row'>
                <button class='mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon' onclick='history.go(-1);'>
                	<i class='material-icons' style='color:white;'>arrow_back</i>
                </button>
                <div class='mdl-layout-spacer'></div>
        		<span class='mdl-layout-title' style='color: white;'>Meu Currículo</span>
            </div>
        </header>
	<div>
		<!--- cardzao principal --->
        <div class='mdl-card' style='padding-left: 2em;>
        	<!--- card da imagem--->
        	<div class='mdl-card left'>
        		<img src='http://issct2013.com.br/wp-content/uploads/2018/04/curriculo-1.jpg' style='position: fixed;width:15em; height:15em;'>
        	</div>
        	<!--- card dos textos --->
        	<div class='mdl-card-testo left'>
					<form action='index.php'>
				<div class='mdl-card__title'>

					 </div>
				  <p style="font-size:250%;"></p>
					<br/><br/><br/>
					<p style="font-size:140%;"></p>
					<hr>
					<p><b>Sexo:</b> </p>
					<p><b>Data de Nascimento:</b> </p>
					<p><b>E-mail:</b></p>
					<p><b>Telefone:</b> </p>
					<p><b>Estado Civil:</b> </p>
					<p><b>Bairro em que reside:</b></p>
					<p style="font-size:140%;"></p>
					<hr>
					<p><b>Formação Escolar:</b></p>

					<p><b>Cursando:</b></p>
	        <p><b>Ano/Período:</b> </p>

					<p style="font-size:140%;"></p>
					<hr>
					<p><b>Idioma Estrangeiro:</b></p>
				  <p><b>Experiência profissional:</b></p>
		      <p><b>Pesquisa, ensino e extensões:</b> </p>
						<p style="font-size:140%;">Objetivos</p>
						<hr>
					<p><b>Profissional:</b></p>

				  <p><b>Disponibilidade:</b></p>

					<button class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored' type='input' style='color:white;'>Sair</button></center>
		        </form>
            </div>
            <!--Gambiarra pra mostrar todo o texto acima-->
			<div class='' style='margin-bottom:20px'></div>
			<!--sera ajeitado dps-->
	</div>
</div>
</html>
