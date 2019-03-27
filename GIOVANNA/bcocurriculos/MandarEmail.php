
function enviar_email($con, $email, $rash){
  $destinatario = $email;

  $subject = "RECUPERAR SENHA";
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  $message = "<html><head>";
  $message .= "
    <h2>Você solicitou uma nova senha?</h2>
    <hr>
    <h3>Se sim, aqui está o link para você recuperar a sua senha:</h3>
    <p>Para recuperar sua senha, acesse este link: <a href='".sitedir."?pagina=alterar&rash={$rash}'>".sitedir."?pagina=alterar&rash={$rash}</a></p>
    <hr>
    <h5>Não foi você quem solicitou? Se não ignore este email, porém alguém tentou alterar seus dados.</h5>
    <hr>
    Atenciosamente, Tutoriais e Informática.
  ";

  $message .="</head></html>";

  if(mail($destinatario, $subject, $message, $headers)){
    echo "<div class='alert alert-success'>Os dados foram enviados para o seu email. Acesse para recuperar.</div>";
  }else{
    echo "<div class='alert alert-danger'>Erro ao enviar</div>".$sql->error;
  }
}
}
