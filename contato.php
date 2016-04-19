<!-- contato -->
		<?php $cabecalho_title="Contato" ?>
		<title><?php print $cabecalho_title; ?></title> 
		<link rel="stylesheet" href="css/contato.css">
		<?php include("cabecalho.php") ?>
	<body> 
	<!-- Texto da Páginal Principal : Ajuda -->
		<section>
	<h1>Ajuda</h1>
	
	<p>O Portfólio do Desenvolvedor Web aí construído, foi<br>
	realizado com a intuição de demonstrar, o conhecimento no desenvolvimento<br>
	treinamento e aplicação das linguagens HTML, CSS e JavaScript, com a<br>
	orientação e instrução da Professora Kelly, com o intuito de<br>
	tornar este site disponível e acessível.
	</p>
	
	<nav class="opcoes-interesse">
		<ul>
				<li><img src="img/internet-web-browser.png"></li>
				<li><img src="img/icone_contato.png"></li>
		</ul>
	</nav>
	
	<p class="contato">Contato:<br>
	fone: (11)96596-3666<br>
	e-mail: marbruge@gmail.com</p>
	<form action="email_sender.php" method="POST">
		<div class="detalhes">
			<table align="center">
				<thead>
					<tr>
						<td colspan="2">Comente sobre a Pagina</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nome:</td>
						<td><input name="nome" type="textfield" class="nome"></td>
					</tr>
					<tr>
						<td>Telefone:</td>
						<td><input type="tel" class="telefone" name="telefone" placeholder="(00)00000-0000"></td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td><input type="email" class="email" name="email" placeholder="email@exemplo.com"></td>
					</tr>
					<tr>
						<td>Assunto:</td>
						<td><input type="textfield" class="assunto" name="assunto"></td>
					</tr>
					<tr>
						<td>Mensagem:</td>
						<td><label for="textarea"></label>
						<textarea name="mensagem" class="textarea" cols="35" rows="5"></textarea>
					</tr>
				</tbody>
			</table>
		</div>
			<input type="submit" class="mandar" value="Mandar">
			<input type="reset" class="limpar" value="Limpar">
	</form>
		<br><br><br><br>
		</section>
		<?php include("rodape.php"); ?>
	</body>
