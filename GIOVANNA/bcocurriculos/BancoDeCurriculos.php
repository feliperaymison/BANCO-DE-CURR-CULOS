<!DOCTYPE html>
<html lang="pt-BR ">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Banco de Curriculos</title>
  <!-- arquivos locais
  <link rel="stylesheet" href="material.min.css">
  <script src="material.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  -->
  <!--arquivos online-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>
<style>

.mdl-card{
	align-self:center;
	margin-top:0%;
    margin-bottom:0%;
 	width:100%;
	text-align:center;
	margin-left: auto;
    margin-right: auto;
}
.mdl-card-testo{
	margin-top: 5%;
 	width:60%;
	text-align:left;
	margin-left: 35%;
	position: absolute;
    
}
.mdl-mini-footer .mdl-logo {
    line-height: 0px;

}
.button-informacoes{
	float: left;
	margin-left: 7%; 
	margin-top: 2%;
}
.acme-card {
	margin-left: 5%;
	height: 150px;
	width: 200px;
	margin-top:5%;
	background: url('https://tfirdaus.github.io/mdl/images/laptop.jpg') center / cover;

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
	.button-informacoes{
		float: inherit;
		float:center;
		margin-left: auto;
		margin-top: 2%;

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
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" onclick="history.go(-1);">
                	<i class="material-icons" style="color:white;">arrow_back</i>
                </button>
                <span class="mdl-layout-title"></span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation ">
                    <a href="#" class="mdl-navigation__link">Nome da Empresa</a>
            	</nav>
            </div>
        </header>
		
<div style="overflow-y:scroll;"><!--Começo, (O style insere uma barra de scroll)-->
		<!--- cardzao principal --->
        <div class="mdl-card mdl-shadow-6dp">
        	<!--- card da imagem--->
        	<div class="mdl-card acme-card">
        	</div>
        	<!--- card dos textos --->
        	<div class="mdl-card-testo">
		        <form action="#">
		            <p>Nome</p>
		            <p>Modalidade</p>
		            <p>Curso</p>
		            <p>Experiência profissional</p>
		            <p>Pesquisa, ensino e extensões</p>
		        </form>      
        	</div>
        <div class="" style="margin-bottom:5%">
             <button class="mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white button-informacoes" style="">
                                +Informações
             </button>
        </div>
        </div>
<!--- APAGUEM ISSO AQUI, ESSA BOSTA SERVE SÓ P REPLICAR OS CARDS--->
        <div class="mdl-card mdl-shadow--6dp">
        	<div class="mdl-card acme-card" style="" >
        	</div>
        	<div class="mdl-card-testo">
		        <form action="#">
		            <p>Nome</p>
		            <p>Modalidade</p>
		            <p>Curso</p>
		            <p>Experiência profissional</p>
		            <p>Pesquisa, ensino e extensões</p>
		        </form>      
        	</div>
       <div style="margin-bottom:5%">
             <button class="mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white button-informacoes" style="">
                                +Informações
             </button>
        </div>
       
        <div class="mdl-card mdl-shadow--6dp">
        	<div class="mdl-card acme-card" style="" >
        	</div>
        	<div class="mdl-card-testo">
		        <form action="#">
		            <p>Nome</p>
		            <p>Modalidade</p>
		            <p>Curso</p>
		            <p>Experiência profissional</p>
		            <p>Pesquisa, ensino e extensões</p>
		        </form>      
        	</div>
        <div style="margin-bottom:5%">
             <button class="mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white button-informacoes" style="">
                                +Informações
             </button>
        </div>
        </div>
<!--- APAGA ATÉ AQUI--->
</div>


        
            
        <!--- exemplo do uso do grid
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">6(8tablet)</div>
            <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">4(6tablet)</div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">2(4phone)</div>
        </div>
        --->
        
        </main>
        </div>
        </div>
</div>
</body>
</html>