<html>
    <title>Cadastrar empresa</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
/*Adapta pra tela de Iphone 4(NOTA: RESOLUÇÃO 768X1024, 800X1280, 980X1280 ESTÃO MEIO BUGADAS*/ 
@media screen and (max-width: 480px){
	.mdl-card{
	width: 75%;
	margin-top: 5%;
    margin-bottom: 5%;
	}
}
/*Fim*/
/*Ajusta o Cabeçalho*/
@media screen and (max-width: 280px){
    .esconde-celular{
    display: none;
}

}
@media screen and (min-width: 510px){
    .mostra-celular{
    display: none;
}
}
.demo-layout .mdl-layout__header .mdl-layout__drawer-button {
  color: rgba(0, 0, 0, 0.54);
  border: none;
}
@media screen and (max-width: 1920px){
.mdl-layout__header-row {
    height: 56px;
    padding: 0 20px 0 20px;
}
}
/*Fim*/
</style>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"><!--Cabeçalho-->
     <header class="mdl-layout__header">
         <div class="mdl-layout__header-row">
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" onclick="history.go(-1);">
            <i class="material-icons">arrow_back</i>
            </button><!--Botão de retorno-->
            <span class="mdl-layout-title"></span>
         <div class="mdl-layout-spacer"></div>
            <nav class="mdl-navigation esconde-celular">
                <a href="https://www.youtube.com/watch?v=rYHeNJfmHHo"class="mdl-navigation__link">Sair</a>
            </nav>
        </div>
     </header>
	<div style="overflow-y:scroll;"><!--Começo, (O style insere uma barra de scroll)-->
        <div class="mdl-card mdl-shadow--6dp">
        <form action="#">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input class="mdl-textfield__input" type="text" id="sample3">
                 <label class="mdl-textfield__label" for="sample3">Nome Ficticio</label>
            </div>
        </form>
        <form action="#">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input class="mdl-textfield__input" type="text" id="sample3">
                 <label class="mdl-textfield__label" for="sample3">CNPJ</label>
            </div>
        </form>      
        <form action="#">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input class="mdl-textfield__input" type="text" id="sample3">
                 <label class="mdl-textfield__label" for="sample3">Endereço</label>
            </div>
        </form>
        <form action="#">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5"></textarea>
                 <label class="mdl-textfield__label" for="sample3">Razão Social</label>
            </div>
        </form>
        <form action="#">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="email" id="sample3">
          <label class="mdl-textfield__label" for="sample3">E-mail</label>
        </div>
        </form>
        <form action="#">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
             <input class="mdl-textfield__input" type="tel" id="sample3">
             <label class="mdl-textfield__label" for="sample3">Telefone</label>
        </div>
        </form>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
            <b style="color: white">Cadastrar</b>
        </button>
        </div>
    </div>
    </body>
</html>
