<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Enviando e-mail...</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/bootstrap-flatly.css">
	</head>
		<body>
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<style>
					.navbar {
						margin: 0;
					}
				</style>
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">Portfolio Web Worker</a>
							<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
								<span class="glyphicon glyphicon-th-large"></span>
							</button>
					</div>
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="sobre.php">Sobre  
								<span class="glyphicon glyphicon-home"></span>
								</a>
							</li>
							<li><a href="index.php">Portfolio  
								<span class="glyphicon glyphicon-user"></span>
								</a>
							</li>
							<li><a href="contato.php">Contato  
								<span class="glyphicon glyphicon-bullhorn"></span>
								</a>
							</li>
						</ul>
			</nav>
						<div class="jumbotron">
							<div class="container">
								<!-- h1 e p que ja tinhamos -->	
									<h1>Sua mensagem foi enviada com sucesso!</h1>
										<p>Obrigado pelo comentario</p>
							</div><!-- fim .container dentro do do jumbotron -->
						</div><!-- fim .jumbotron -->
							<div class="container">
									<div class="col-sm-4">
										<div class="panel panel-default">
												<div class="panel-heading">
													<h2 class="panel-title">Conteudo da mensagem</h2>
												</div><!-- fim .panel-heading -->
													<div class="panel-body">
														<!-- ...aqui vai o <dl> que ja temos hoje... -->
														<dl>
															<dt>Nome:</dt>
																<dd><?= $_POST['nome'] ?></dd>
															<dt>Telefone:</dt>
																<dd><?= $_POST['telefone'] ?></dd>
															<dt>E-mail:</dt>
																<dd><?= $_POST['email'] ?></dd>
															<dt>Assunto:</dt>
																<dd><?= $_POST['assunto'] ?></dd>
															<dt>Mensagem:</dt>
																<dd><?= $_POST['mensagem'] ?></dd>
														</dl>
													</div><!-- fim .panel-body -->
										</div><!-- fim .panel -->
												<a href="index.php">
													<button type="submit" class="btn btn-primary btn-lg pull-right">
														<span class="glyphicon glyphicon-thumbs-up"></span>
															Confirmar
													</button>
												</a>
												<a href="contato.php">
													<button type="submit" class="btn btn-primary btn-lg pull-right">
														<span class="glyphicon glyphicon-repeat"></span>
															Voltar
													</button>
												</a>
									</div>
							</div><!-- fim .container da pagina -->
								<script src="js/jquery.js"></script>
								<script src="js/bootstrap.js"></script>
		</body>
</html>