<?php
//Variáveis
 
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$mensagem = $_POST['mensagem'];



// Compo E-mail
  $arquivo = "
  Nome: $nome <br>
  Celular: $celular <br>
  Mensagem: $mensagem
  ";


  //enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "atendimento@emberloungebar.com.br";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: Ember Lounge Bar';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = $nome . $celular . $mensagem . " enviados";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>

<script type="text/javascript">
  alert('<?php echo $mgm; ?>');
  window.location.href='index.php';
  
</script> 