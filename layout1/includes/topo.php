<!-- incio menu-->
	<nav class="navbar navbar-default navbar-static-top navbar-color-custom" id="vertical-menu">
		
		<!-- conteudo do menu-->
		<div class="container">
			
			<!-- logo marca--> 
			<a href="../home/" class="navbar-imagem">
			</a>
			<!-- logo marca--> 
			
			<!-- botão que irá aparecer quando estiver mobile-->
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- botão que irá aparecer quando estiver mobile-->
			
			<!-- itens do menu a direita-->
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right menu-ul identifica-menu">
					<li  id="verificado_tamanho" class='<?php if($paginaCorrente == 'home.php') {echo 'active-custom';} ?> '>
						<a class='a-effect' href="../home/">
							Home
						</a>
					</li>
					<li id="verificado_tamanho" class='<?php if($paginaCorrente == 'blog.php') {echo 'active-custom';} ?> '>
						<a class='a-effect' href="#">
							Blog
						</a>
					</li>
					
					<!-- Drop Down-->
					<?php echo "<li id='verificado_tamanho' class='dropdown";if($paginaCorrente == 'blog.php'){echo 'active-custom';}echo " '>";?>
						<a href="#" class="dropdown-toggle a-effect" data-toggle="dropdown">
							Social Media <b class="caret"></b>
						</a>
						<!-- Menu quando clicar no <li> Social Media -->
						<ul class="dropdown-menu">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Google+</a></li>
						</ul>
						<!-- Menu quando clicar no <li> Social Media -->
					</li>
					<!-- Drop Down -->

					<li id="verificado_tamanho" class='<?php if($paginaCorrente == 'sobre.php') {echo 'active-custom';} ?>'>
						<a class='a-effect' href="../sobre/">
							About
						</a>
					</li>
					<li id="verificado_tamanho" class='<?php if($paginaCorrente == 'contato.php') {echo 'active-custom';} ?>'>
						<a class='a-effect' href="#contato" data-toggle="modal">
							Contato
						</a>
					</li>
					<li id="verificado_tamanho" class='<?php if($paginaCorrente == 'noticias.php') {echo 'active-custom';} ?>'>	   <a class='a-effect' href="../noticias/">
							Notícias
						</a>
					</li>
				</ul>
			</div>
			<!-- itens do menu a direita-->

		</div>
		<!-- conteudo do menu-->

	</nav>
	<!-- final menu-->