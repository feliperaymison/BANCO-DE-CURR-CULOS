<!DOCTYPE html>
<head>
    <title>e-Curriculum || Porto Velho Calama</title>
    <!--Arquivos online-->
    <link rel="shortcut icon" type="imagem/x-icon" href="icone.png"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
@import url(https://fonts.googleapis.com/icon?family=Material+Icons);
/*.mdl-radio {
  position: relative;
  font-size: 16px;
  line-height: 24px;
  display: block;
  vertical-align: middle;
  box-sizing: border-box;
  height: 24px;
  margin: 0;
  padding-left: 0;
  margin-bottom: 32px;
}
*/
/*Coiso que faz o card não ficar cagado*/
.mdl-card{
	align-self:center;
	margin-top:5%;
	margin-bottom:5%;
	width:50%;
	text-align:center;
	margin-left: auto;
	margin-right: auto;
}
/*Fim*/
/*codigo manual*/
.esquerda {
	float: left; 
	text-align: left;
	padding-left: 4em;
	padding-bottom-top: 2em;
}
/*fim de codigo manual*/
/*Adapta pra tela de Iphone 4(NOTA: RESOLUÇÃO 768X1024, 800X1280, 980X1280 ESTÃO MEIO BUGADAS*/ 
@media screen and (max-width: 480px){
	.mdl-card{
		width: 99%;
		margin-top: 5%;
		margin-bottom: 5%;
	}
	.esquerda {
		float: left; 
		text-align: left;
		padding-left: 0.5em;
		padding-bottom-top: 2em;
	}

}
/*Fim*/
.demo-layout .mdl-layout__header .mdl-layout__drawer-button {
	color: rgba(0, 0, 0, 0.54);
	border: none;
}
@media screen and (max-width: 1920px){
	.mdl-layout__header-row {
		height: 56px;
		padding: 0 20px 0px 20px;
	}
}
@media screen and (min-width: 510px){
	.mostra-celular{
		display: none;
	}
	.esquerda {
		float: left; 
		text-align: left;
		padding-left: 1em;
		padding-bottom-top: 2em;
	}
}
@media screen and (max-width: 200px){
	.esconde-celular{
		display: none;
	}
	.esquerda {
		float: left; 
		text-align: left;
		padding-left: 2em;
		padding-bottom-top: 2em;
	}
}
/*Sinceramente não sei como isso funfa, so coloquei mesmo*/
label.input-custom-file input[type=file] {
	display: none;
}
/*fim*/
</style>
<body>
	<script>
		function formatar(mascara, documento){
			var i = documento.value.length;
			var saida = mascara.substring(0,1);
			var texto = mascara.substring(i)

			if (texto.substring(0,1) != saida){
				documento.value += texto.substring(0,1);
			}

		}
	</script>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"><!--Cabeçalho-->
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" onclick="history.go(-1);">
					<i class="material-icons" style="color: white;">arrow_back</i>
				</button><!--Botão de retorno-->
				<div class="mdl-layout-spacer"></div>
				<span class="mdl-layout-title" style="color: white;">Sobre o sistema</span>
			</div>
		</header>
		<div class="mdl-layout__content">
		</div>
	</body>
		<div class="corpo">
			<h1>Introdução</h1>
			<h1>Objetivo</h1>
			<h1>Justificativa</h1>
			<h1>Conclusão</h1>
		</div>
	</html>