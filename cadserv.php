 <?php

 session_start();

 ?>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content= "Página Administrativa">
		<meta name="author" content="Elias">	 
		<title>Acesso Administrativo</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
		<link href="css/theme.css" rel="stylesheet">
</head>
<body role="document">
		

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="administrativo.php">Bootstrap theme</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="administrativo.php">Home</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
					<li><a href="php\sair.php">Sair</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toogle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opções<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="cadserv.php">Postar</a></li>
							<li><a href="#">Alterar</a></li>
							<li><a href="#">Excluir</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Nav header</li>

						</ul>
					</li>
				</ul>

			</div>
		</div>
	</nav>

	


		<div class="container">
			<form method="POST" action="php\processa_cad_serv.php">
 				Nome do Serviço<input type="text" name="txt_nome_serv" placeholder="Nome" maxlength="40 class="form-control"><br><br>
 				Descrição do Serviço<input type="text" name="txt_decserv" placeholder="Descrição" maxlength="30" class="form-control"><br><br>
 				Responsável pelo Serviço<input type="text" name="txt_descresp" placeholder="Responsável" maxlength="15" class="form-control"><br><br>
				1º Tarefa a ser realizada<input type="text" name="serv_tar1" placeholder="Tarefa" class="form-control"><br><br>
				2º Tarefa a ser realizada<input type="text" name="serv_tar2" placeholder="Tarefa" class="form-control"><br><br>
				3º Tarefa a ser realizada<input type="text" name="serv_tar3" placeholder="Tarefa" class="form-control"><br><br>
 				<input type="submit" value="Cadastrar">
 			</form>
 		</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/docs.min.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

