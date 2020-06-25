
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
  

	  $arquivo = "../registro.txt";
	// abre um arquivo
	// parâmetro 'r' abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
	$handle = fopen($arquivo, "r");
	// loop até o final do arquivo
	while (!feof ($handle)) {
	  // pega o texto linha a linha
	  $nome = fgets($handle, 4096);
	  // imprime os nomes do arquivo
	  echo $nome."<br><hr>";
	}
	// fecha um ponteiro de arquivo aberto
	fclose ($handle);


?>
</body>
</html>


