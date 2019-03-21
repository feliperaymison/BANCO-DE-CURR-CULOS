<?php
session_start();
?>
<!DOCTYPE html>
<html>

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
    width:80%;
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
<?php

include('conexao.php');

$idAluno = $_SESSION['idAluno'];

$select = mysqli_query($conn, "SELECT * FROM aluno WHERE idAluno = '$idAluno'");


    while ($aluno = mysqli_fetch_assoc($select)) {
        $id = $aluno['idAluno'];
        $nome = $aluno['nome'];
        $data = $aluno['data_de_nascimento'];
        $cpf = $aluno['cpf'];
        $tel = $aluno['telefone'];
        $email = $aluno['email'];
        $senha = $aluno['senha'];
        $objetivo = $aluno['objetivo_prof'];
        $experiencia = $aluno['experiencia_prof'];
        $extensao = $aluno['extensao'];
        $foto = $aluno['foto'];
        $bairro = $aluno['bairro'];
        $idioma = $aluno['idioma'];
        $escolaridade = $aluno['escolaridade'];
        $projetos =  $aluno['extensao'];
    }

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> <!--Cabeçalho-->
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row"/>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" onclick="history.go(-1);">
                <i class="material-icons" style="color: white;">arrow_back</i>
            </button><!--Botão de retorno-->
            <div class="mdl-layout-spacer"></div>
            <span class="mdl-layout-title" style="color: white;">Atualização de Dados</span>

    </header>
    </div>
    <div class="mdl-layout__content">
        <main class="mdl-card mdl-shadow--6dp">
         <form action="atualizarAluno.php" method="post" enctype="multipart/form-data">
            <div class="esquerda">
                <!--Textfield Nome -->
                <br>
                    <label><b>Nome:</b></label>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="sample" name="nome"  value="' . $nome .'">
                    <label class="mdl-textfield__label" for="sample"></label>
                </div>
                <div><!--Radio buttons-->
                    <label><b>Sexo (campo obrigatório): </b></label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="opção-1">
                        <input type="radio" required id="opção-1" class="mdl-radio__button" name="sexo" value="Masculino">
                        <span class="mdl-radio__label">Masculino</span>
                    </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="opção-2">
                        <input type="radio" required id="opção-2" class="mdl-radio__button" name="sexo" value="Feminino">
                        <span class="mdl-radio__label">Feminino</span>
                    </label>
                </div>
                <br><br>
                <div>
                    <label><b>Estado Civil (campo obrigatório)</b></label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="estCivil" value="Solteiro(a)">
                        <span class="mdl-radio__label">Solteiro(a)</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="estCivil" value="Casado(a)">
                        <span class="mdl-radio__label">Casado(a)</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="estCivil" value="Separado(a)">
                        <span class="mdl-radio__label">Separado(a)</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="estCivil" value="Divorciado(a)">
                        <span class="mdl-radio__label">Divorciado(a)</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="estCivil" value="Viúvo(a)">
                        <span class="mdl-radio__label">Viúvo(a)</span>
                    </label>
                    <br><br>
                </div>
                <div><!--Data-->
                    <br>
                    <label><b>Data de Nascimento (campo obrigatório):</b></label>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="date" id="data" name="data">
                    </div>
                </div>
                <div><!--telefone-->
                    <br>
                    <label><b>CPF:</b></label>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" maxlength="14" OnKeyPress="formatar("###.###.###-##", this)" id="sample3" name="cpf"  value="' . $cpf .'" readonly="readonly">
                        <label class="mdl-textfield__label" for="sample3"></label>
                    </div>
                    <br>
                </div>
                <div><!--telefone-->
                    <br>
                    <label><b>Senha (para login):</b></label>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" id="sample3" name="senha">
                        <label class="mdl-textfield__label" for="sample3" value="#"></label>
                    </div>
                    <br>
                </div>
                <div><!--Email-->
                    <br>
                    <label><b>E-mail:</b></label>
                    <div class="mdl-textfield mdl-js-textfield"><!--Não sei se do firefox ou meu pc mas o calendario pra selecionar datas ta bugado, No chrome e de boa-->
                        <input class="mdl-textfield__input" type="email" id="sample2" name="email" value="' . $email .'">
                        <label class="mdl-textfield__label" for="sample2"></label>
                    </div>
                </div>
                <div><!--telefone-->
                    <br>
                    <label><b>Bairro em que reside:</b></label>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="sample3" name="bairro" value="' . $bairro .'">
                        <label class="mdl-textfield__label" for="sample3"></label>
                    </div>
                    <br>
                </div>
                <div><!--telefone-->
                    <br>
                    <label><b>Idiomas que domina (ex.: inglês, espanhol, japonês...):</b></label>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="sample3" name="idioma" value="' . $idioma .'">
                        <label class="mdl-textfield__label" for="sample3"></label>
                    </div>
                    <br>
                </div>
                <div><!--telefone-->
                    <br>
                    <label><b>Telefone: </b></label>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="tel" id="sample3" maxlength="14" OnKeyPress="formatar("##-#####-####", this)" name="telefone" value="' . $tel .'">
                        <label class="mdl-textfield__label" for="sample3"></label>
                    </div>
                    <br>
                </div>
                <div><!--Foto do Individuo-->
                    <br>
                    <label><b>Adicionar foto (seu rosto/ max. 2MB) (campo obrigatório)</b></label>
                    <br>
                    <div>
                        <Label class="input-custom-file mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                            <b style="color: white">Adicionar Foto</b>
                            <input type="file" required name="arquivo" id="arquivo" accept="image/x-png,image/gif,image/jpeg">
                        </label>
                        <br>
                        <br>
                    </div>
                </div>
                <!--Integrados abaixo-->
                <div>
                    <label><b>Curso (campo obrigatório)</b></label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="curso" value="Edificações">
                        <span class="mdl-radio__label">Edificações</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="curso" value="Eletrotécnica">
                        <span class="mdl-radio__label">Eletrotécnica</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="curso" value="Informática">
                        <span class="mdl-radio__label">Informática</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="curso" value="Química">
                        <span class="mdl-radio__label">Química</span>
                    </label>
                    <br><br>
                </div>
                <!--Fim dos Cursos Integrados-->
                <div>
                    <label><b>Turno (campo obrigatório)</b></label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="turno" value="Matutino">
                        <span class="mdl-radio__label">Matutino</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required class="mdl-radio__button" name="turno" value="Vespertino">
                        <span class="mdl-radio__label">Vespertino</span>
                    </label>
                    <br><br>
                </div>
                <!--Anos Integrado-->
                <div>
                    <label><b>Ano (campo obrigatório)</b></label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required id="integrado-1" class="mdl-radio__button" name="ano" value="1º">
                        <span class="mdl-radio__label">1º</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required id="integrado-2" class="mdl-radio__button" name="ano" value="2º">
                        <span class="mdl-radio__label">2º</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required id="integrado-3" class="mdl-radio__button" name="ano" value="3º">
                        <span class="mdl-radio__label">3º</span>
                    </label>
                    <br>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        <input type="radio" required id="integrado-4" class="mdl-radio__button" name="ano" value="4º">
                        <span class="mdl-radio__label">4º</span>
                    </label>
                    <br>
                </div>
                <!--Fim dos Anos Integrados-->
                <div>
                    <br>
                    <label><b>Objetivo Profissional</b></label>
                    <br>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="objetivo_profissional" style="border-width: 2px;border-style: solid;">'.$extensao.'</textarea>
                        <label class="mdl-textfield__label" for="sample3"></label>
                    </div>
                </div>
                <div>
                    <br>
                    <label><b>Experiência Profissional</b></label>
                    <br>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="experiencia" style="border-width: 2px;border-style: solid;">' . $experiencia . '</textarea>
                        <label class="mdl-textfield__label" for="sample3"></label>
                    </div>
                </div>
                <div>
                    <br>
                    <label><b>Pesquisa, Ensino e Extensão (nome e ano de atuação)</b></label>
                    <br>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="projetos_de_extensao" style="border-width: 2px;border-style: solid;">'.$extensao.'</textarea>
                        <label class="mdl-textfield__label" for="sample3"></label>
                    </div>
                </div>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                    <b style="color: white">Cadastrar</b>
                </button>
                <br><br>
            </div>
        </form>
    </main>
</div>

</body>
</html>
