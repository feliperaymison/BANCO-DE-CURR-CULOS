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
<link rel="stylesheet" href="estiloCurriculo.css">
</head>
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
  <div class='mdl-layout mdl-js-layout mdl-layout--fixed-header'>
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
					<h4 class='mdl-card__title-text'style="font-size:250%;"></h4>
					 </div>
				  <p style="font-size:250%;">Giovanna Nunes da Silva</p>
					<br/><br/><br/>
					<p style="font-size:140%;">Dados Pessoais</p>
					<hr>
					<p><b>Sexo:</b> Feminino</p>
					<p><b>Data de Nascimento:</b> 21/02/2002</p>
					<p><b>E-mail:</b> giovannan834@gmail.com</p>
					<p><b>Telefone:</b> (69)9 9929-9515</p>
					<p><b>Estado Civil:</b> solteira</p>
					<p><b>Bairro em que reside:</b> Rio Madeira</p>
					<p style="font-size:140%;">Formação</p>
					<hr>
					<p><b>Formação Escolar:</b> Ensino médio incompleto</p>

					<p><b>Cursando:</b> Técnico em Informática Integrado</p>
	        <p><b>Ano/Período:</b> 3°</p>

					<p style="font-size:140%;">Cursos/Experiência</p>
					<hr>
					<p><b>Idioma Estrangeiro:</b> inglês</p>
				  <p><b>Experiência profissional:</b> nenhuma</p>
		      <p><b>Pesquisa, ensino e extensões:</b> Projeto Share Good Things</p>
						<p style="font-size:140%;">Objetivos</p>
						<hr>
					<p><b>Profissional:</b> Conseguir estágio</p>

				  <p><b>Disponibilidade:</b> Manhã</p>


</html>
