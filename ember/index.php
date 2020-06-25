
<html>

    <head>
      <title></title>
    </head>
<body>

      
      <form method="POST" action="email.php">
	      <div class="row">
	      	
	        <div class="large-6 columns"> 
	              <label>NOME COMPLETO</label>
	              <input type="text" class="meuinput" id="nome" name="nome" max="20" required="" />

	              <label>CELULAR</label>
	              <input type="text" class="meuinput celular" id="celular" name="celular" />
	        </div>
	        <div class="large-6 columns">
	              <label>MENSAGEM</label>
	              <textarea rows="8" class="meuinput" id="mensagem" name="mensagem" style="width: 100% !important"></textarea>
	        </div>
	      </div>
          <div class="row divenviar">
	          <div class="large-12 columns">
	             <button class="btnenviar show-for-large-up hide-for-small-only">ENVIAR!</button>
	            
	          </div>
          </div>
       </form>
    
    
 </body>
</html>