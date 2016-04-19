<!-- index -->
		<?php $cabecalho_title="Portfolio do Desenvolvedor" ?>
		<title><?php print $cabecalho_title; ?></title> 
	    <?php include("cabecalho.php"); ?>
			<!--[if lt IE 9]>
				<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
	<body>
	
	<!-- Texto da Páginal Principal : Apresentação de Linguagens de Desenvolvimento Web -->
	<section> <!--class = "container-section"-->
		<h1>Desenvolvimento do Portfólio Web</h1>
			<nav class="opcoes-interesse">
					<a href="#" class="pause"></a>
						<img src="img/web.png" alt="web" class="banner">
				<ul>
					<li><a href="#html"><img src="img/html-logo.png"></a></li>
					<li><a href="#css"><img src="img/css-logo.png"></a></li>
					<li><a href="#javascript"><img src="img/javascript-logo.png"></a></li>
				</ul>
			</nav>
	<p id="html">HTML</p>
	<p>
	O HTML é uma linguagem de marcação utilizada para desenvolvimento de sites.<br> 
	Esta linguagem surgiu junto com o HTTP, ambos possibilitaram<br> 
	a internet ser popularizada.
	</p>
	
	<p id="css">CSS</p>
	<p>O Cascading Style Sheets (CSS) é uma "folha de estilo" composta por “camadas”<br>
	e utilizada para definir a apresentação (aparência) em páginas da internet que adotam<br>
	para o seu desenvolvimento linguagens de marcação (como XML, HTML e XHTML). <br>O CSS define 
	como serão exibidos os elementos contidos no código de uma página da<br> internet e sua maior 
	vantagem é efetuar a separação entre o formato e o conteúdo de um documento.</p>
	
	<p id="javascript">JavaScript</p>
	<p>O JavaScript é uma linguagem de programação interpretada.<br> 
	Foi originalmente implementada como parte dos navegadores web<br> 
	para que scripts pudessem ser executados do lado do cliente e interagissem<br>
	com o usuário sem a necessidade deste script passar pelo servidor, controlando o navegador,<br>
	realizando comunicação assíncrona e alterando o conteúdo do documento exibido.</p>
	
	<br>
	
	<p>
	   Com essas linguagens de marcação, estilo e programação interpretada,<br> 
	   eu Bruno Pavan Adário Moreira, consegui desenvolver esse site no qual<br>
	   estou editando-o neste momento.
	</p>
	
	<br><br><br><br>
		</section>
			<script src="js/bannerRotativo.js"></script>
			
			<?php include("rodape.php"); ?>
	</body>
