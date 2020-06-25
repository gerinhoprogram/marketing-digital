<?php
//Variáveis
 
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];



// Compo E-mail
  $arquivo = "
  Email: $email <br>
  Mensagem: $mensagem
  ";


  //enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "rogerio_furquim@hotmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $email <$mensagem>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "Obrigado " . $email . ", seu email foi enviado!";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>

<script type="text/javascript">
  alert('<?php echo $mgm; ?>');
  window.location.href='index.php';
  
</script> 