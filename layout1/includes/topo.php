<!-- inciio menu-->
	<div class="navbar navbar-default" id="vertical-menu">
		
		<!-- conteudo do menu-->
		<div class="container">
			
			<!-- logo marca--> 
			<a href="../home/" class="navbar-imagem">
				<img src="../img/EXEMPLOS/PRETO&TRANSPARENTE/logo8.png" alt="inlogica">
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
				<ul class="nav navbar-nav navbar-right menu-ul">
					<li  <?php if($paginaCorrente == 'home.php') {echo 'class="active"';} ?>><a href="../home/">Home</a></li>
					<li <?php if($paginaCorrente == 'blog.php') {echo 'class="active"';} ?>><a href="#">Blog</a></li>
					
					<!-- Drop Down-->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class="caret"></b></a>
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

					<li <?php if($paginaCorrente == 'sobre.php') {echo 'class="active"';} ?>><a href="../sobre/">About</a></li>
					<li <?php if($paginaCorrente == 'contato.php') {echo 'class="active"';} ?>><a href="#contato" data-toggle="modal">Contato</a></li>
				</ul>
			</div>
			<!-- itens do menu a direita-->

		</div>
		<!-- conteudo do menu-->

	</div>
	<!-- final menu-->