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
/*
.mdl-cell{
    background-color:#bbb;
    height:50px;
}
*/
.mdl-card{
  align-self: center;
  margin-top: 100px;
}
.mdl-mini-footer .mdl-logo {
  line-height: 0px;

}
@media screen and (max-width: 500px){
  .mdl-card{
    width: 70%;
    margin-top: 10%;
  }
  .esconde-celular{
    display: none;
  }
}

@media screen and (min-width: 510px){
  .mostra-celular{
    display: none;
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
  }
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
              </div>
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

                <div class="mdl-grid">
                    <button class="mdl-cell mdl-cell--12-col mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white" id="validar" name="validar">Validar</button>

                    <div class="mdl-grid" style="text-align: center">
                      <div class="mdl-cell mdl-cell--12-col">
                        <a href="recupera.php>"href class="mdl-color-text--primary " style="float: center">Esqueceu a senha?</a>
                      </div>
              </form>
            </div>
          </div>
        </div>

        <!--- exemplo do uso do grid
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">6(8tablet)</div>
            <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">4(6tablet)</div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">2(4phone)</div>
        </div>
        --->

        <!---
        <footer class="mdl-mini-footer" style=" position: absolute;
          right: 0;
          bottom: 0;
          left: 0;
          padding: 1rem;
          text-align: center;
          height:auto;
        ">
            <div class="mdl-mini-footer--left-section">
                  <div class="mdl-logo">Desenvolvedores</div>
                  <ul class="mdl-mini-footer--link-list">
                    <li><a href="https://banner2.kisspng.com/20180417/qie/kisspng-boruto-uzumaki-naruto-uzumaki-boruto-naruto-next-naruto-5ad5ae71d20cb6.3861197015239532658604.jpg" class="mdl-navigation__link">Mario</a></li>
                    <li><a href="https://banner2.kisspng.com/20180417/jjw/kisspng-kushina-uzumaki-naruto-uzumaki-minato-namikaze-bor-naruto-pain-5ad590d3bc3c33.105708471523945683771.jpg" class="mdl-navigation__link">Ytalo</a></li>

                  </ul>
            </div>
        </footer>
        --->
      </main>

    </div>
  </body>
  </html>
