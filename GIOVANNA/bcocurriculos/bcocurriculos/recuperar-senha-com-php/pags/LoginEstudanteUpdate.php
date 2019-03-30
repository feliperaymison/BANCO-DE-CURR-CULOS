<?php
session_start();
include('conexao.php');
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
<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>
<link rel=stylesheet href="estilo.css">
</head>

<body>
  <script>//MASCARA OK
function mascara(i,t){

     var v = i.value;

     if(isNaN(v[v.length-1])){
        i.value = v.substring(0, v.length-1);
        return;
     }

     if(t == "data"){
        i.setAttribute("maxlength", "10");
        if (v.length == 2 || v.length == 5) i.value += "/";
     }

     if(t == "cpf"){
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";
     }

     if(t == "cnpj"){
        i.setAttribute("maxlength", "18");
        if (v.length == 2 || v.length == 6) i.value += ".";
        if (v.length == 10) i.value += "/";
        if (v.length == 15) i.value += "-";
     }

     if(t == "cep"){
        i.setAttribute("maxlength", "9");
        if (v.length == 5) i.value += "-";
     }

     if(t == "tel"){
        if(v[0] == 9){
           i.setAttribute("maxlength", "10");
           if (v.length == 5) i.value += "-";
        }else{
           i.setAttribute("maxlength", "9");
           if (v.length == 4) i.value += "-";
        }
     }
  }-->
  </script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!--back arrow-->
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon " onclick="history.go(-1);">
          <i class="material-icons" style="color: white;">arrow_back</i>
        </button>
        <div class="mdl-layout-spacer"></div>
        <span class="mdl-layout-title" style="color: white;">Página de Login</span>
      </header>

            <!--- aqui é feito o card do login--->

            <div class="mdl-card mdl-shadow--6dp">
              <div class="mdl-card__supporting-text">
               <?php
               if(isset($_SESSION['nao_autenticado'])):
                ?>
                <?php
              endif;
              unset($_SESSION['nao_autenticado']);
              ?>
              <form action="validarAlunoUpdate.php" method="POST">
                  <label class="mdl-textfield__label" style="text-align:center;color:green">Login</label>
                <br>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input oninput="mascara(this, 'cpf')" id="CPF" type="text" class="mdl-textfield__input"  autocomplete="off" >
                  <label class="mdl-textfield__label" for="CPF">CPF</label>

                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="password" id="password" name="senha" />
                  <label class="mdl-textfield__label" for="password">Senha</label>
                </div>

                <div class="mdl-grid" style="text-align: center">
                  <div class="mdl-cell mdl-cell--12-col">
                    <a href="recupera.php"href class="mdl-color-text--primary " style="float: center">Esqueceu a senha?</a>
                  </div>
                <div class="mdl-grid">
                    <button class="mdl-cell mdl-cell--12-col mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white" id="validar" name="validar">
                      Validar
                    </button>

              </form>
            </div>
          </div>
        </main>

    </body>
    </html>
