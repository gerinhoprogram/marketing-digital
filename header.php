<?php include ("menu.php"); ?>
     
     <div class="row text-right">
		<img src="img/logo.png" alt="logo" title="Logo" class="logo">
	</div>
	<div id="box"><img src="img/foto1.png" alt="Imagem" title="Imagens" class="imgheader img" /></div>
	
		<div class="carousel">
			    <div class="carousel-content">
			  	 <div class="carousel-item">
			        <span style="margin-right: 15px">Empresas com <br/>
			        <span style="margin-right: 30px">identidade</span><br/>
			        <span style="margin-right: 15px">virtual</span><br/> 
			        <span style="margin-left: 10px"> vendem mais</span>
			    </div>
			    <div class="carousel-item">
			         <span style="margin-right: 5px">Games </span> <br/> 
			         <span style="margin-right: 30px"> contato </span> <br/>
			         <span style="margin-right: 30px">e peça já </span> <br/> 
			         seu site!
			    </div>
			    <div class="carousel-item">
			    	<span style="margin-right: 15px">Divulgue seus</span> <br/> 
			    	<span style="margin-right: 30px">-produtos</span> <br/>
			        -serviços</div>
			    </div>
		</div>
		
	<input id="navbar" type='checkbox'>
    <label for="navbar" style="">
        <div class='menu2'>
            <img src="img/balao.png" class="imgBalao" alt="Abrir formulario" title="Abrir Formulário">
        </div>
    </label>

    <ul class="formulario">
        <div class="row divForm">
			<div class="small-12 large-6 medium-8 small-centered columns" style="">
				<p class="txtForm">Sugestões são sempre bem-vindas. Envie seu contato.</p>
				<form action="email.php" method="POST">
					  <div class="">
					    <input type="email" name="email" id="email" placeholder="E-mail" class="meuInput mm" required="">
					  </div>
					  <div >
					    <textarea name="mensagem" id="mensagem" rows="3" placeholder="Mensagem" class="meuInput mm" required=""></textarea>
					  </div>

					  <div class="row">
						  <div class="small-6 large-4 medium-8 small-centered columns">
						  	<button type="submit" class="btnEnviar">ENVIAR!</button>
						  </div>
					  </div>
				</form>
				
			</div>
			<hr class="linha">
			<div class="row text-center">
				  <div class="small-12 large-6 medium-8 small-centered columns">
				  	
				  	<div class="row">
				  		<a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511954511802&text=Olá, tudo bem?">
				  		   <img src="img/wp.png" class="imgRedes" alt="whatsapp" title="whatsapp">
				  	    </a>
				  	    <a href="mailto:rogerio_furquim@hotmail.com?Subject=Contato site">
				  	       <img src="img/email.png" class="imgRedes" alt="E-mail" title="E-mail">
				  	    </a>
				  	</div>
				  </div>
			</div>
	    </div>
    </ul>
	
	
