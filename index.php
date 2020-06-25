<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155829870-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-155829870-1');
        </script>


    <!-- meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Criamos sites e blogs básicos para pequena e média empresa, estamos começando no mercado de tecnologia ">
    <meta name="keywords" content="rogerio, furquim, web, sites, banners, html5, css3, javascript, blog, responsivo, desenvolvimento, páginas, internet, frontend">
    <meta name="robots" content="">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <meta name="generator" content="N/A">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Rogério Furquim da Fonseca">

    <title>Web sites</title>

    <!-- link foundation -->
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

    <!-- ARQUIVOS JS -->
    <!-- jquery para mudar automatico imagens -->
    <script src="js/jquery.js"></script>
    <!-- meu script -->
    <script src="js/meuScript.js"></script>
    <!-- scritp menu responsivo -->
    <script src="js/scriptMenu.js"></script>
    <!-- script para animação do menu scroll -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- carousel giratorio 3d -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="js/jR3DCarousel.min.js"></script>
    

    <!-- ARQUIVOS CSS -->
    <!-- css para o carousel header -->
    <link rel="stylesheet" type="text/css" href="css/cssCarousel.css">
    <!-- css formulario -->
    <link rel="stylesheet" type="text/css" href="css/cssForm.css">
    <!-- css geral -->
    <link rel="stylesheet" type="text/css" href="css/estiloGeral.css">
    <!-- css menu -->
    <link rel="stylesheet" type="text/css" href="css/cssMenu.css">

    <!-- fonts google -->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Carter+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Anton|Open+Sans|Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.png" />
      
     <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">

   <?php 
     date_default_timezone_set('America/Sao_Paulo');
     $hora = date('H');
// echo $hora;
     if($hora >= 19 && $hora <= 24 || $hora == 00){
        $css = '#000';
        $color = '#fff';
     }else{
        $css = '#fff';
        $color = '#000';
     }
   ?>
   
<!--
<script>
      alert('Seja bem vindo! Não repare a bagunça, estamos em construção!')
</script>
-->

  </head>
  <style type="text/css">
      body{
        background-color: <?php echo $css ?> !important; 
      }
      .txtDireitos{
        color: <?php echo $direitos ?> !important;
      }
      .carousel-item{
        color: <?php echo $direitos ?> !important;
      } 
  </style>
  <body>
    <div>
        <?php include('header.php') ?>
    
        <?php include('websites.php') ?>

        <?php include('start.php') ?>

        <?php include('footer.php') ?>
   
    </div>
   <!--  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script> -->
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
