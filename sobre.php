		<?php $cabecalho_title="Sobre" ?>
		<title><?php print $cabecalho_title; ?></title> 
		<link rel="stylesheet" href="css/sobre.css">		

	<body> 
		<?php include("cabecalho.php") ?>
	
	<!-- Texto da Páginal Principal : Apresentação de Linguagens de Desenvolvimento Web -->
		<section>
	<h1>Sobre</h1>
						<figure id="alinhamento">
						<img src="img/me.png">
						<figcaption>Eu, o desenvolvedor :)</figcaption>
						</figure>
	
	<p>Meu nome é Bruno Pavan Adário Moreira, <br>
	tenho <?php print date("Y") - 1995; ?> anos, sou da cidade de Salto-SP; <br>Atualmente estou 
	estudando no Instituto Federal<br> de Salto,São Paulo.</p>
	
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
		</section>
	
		<?php include("rodape.php"); ?>
	</body> 