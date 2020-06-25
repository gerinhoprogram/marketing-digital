<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Email enviado</title>
  <script src="js/vex.combined.js"></script>
  <link rel="stylesheet" href="css/vex-theme-flat-attack.css" />
  <link rel="stylesheet" href="css/vex.css" />
</head>
<body>
  
</body>
</html>
<?php
$arquivo = fopen("registro.txt", "a+");
//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO
$email	=	$_POST["email"];
$mensagem	=	$_POST["mensagem"];
$data = date('d/m/y');

//PREPARA O CONTEÚDO A SER GRAVADO
$conteudo	=	"\r\n$data\t$email\t$mensagem\r\n";

//ARQUIVO TXT
$arquivo	= "registro.txt";

//TENTA ABRIR O ARQUIVO TXT
if (!$abrir = fopen($arquivo, "a+")) {
        echo  "Erro abrindo arquivo ($arquivo)";
        exit;
   }

//ESCREVE NO ARQUIVO TXT
if (!fwrite($abrir, $conteudo)) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }

$mensagem = $email . " sua mensagem foi enviada com sucesso!" ;


//FECHA O ARQUIVO 
fclose($abrir);
?>

<script type="text/javascript">
   vex.dialog.alert({
                message: '<?php echo $mensagem; ?>',
                className: 'vex-theme-flat-attack',
            })
  
</script>