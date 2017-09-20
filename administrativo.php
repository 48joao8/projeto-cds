 <?php
	session_start();
	include("php/conexao.php");

	$sql = "SELECT * from servicos";
	$sql_query = $mysqli ->query($sql) or die ($mysqli->error);
	$linha = $sql_query -> fetch_assoc();

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
					<li><a href="cadastro.php">Cadastro de Usuários</a></li>
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
			



		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
				<h1>Serviços Cadastrados</h1>
				<p>Resumo das atividades da TI e regras para efetuação</p>
			</div>

		</div>

	<div class="container">
				<div class="row">
					<nav class="navbar navbar-default" role="navigation">
						<table class="table">
							  <thead class="thead-inverse">
							    <tr>
							      <th>N</th>
							      <th>Nome</th>
							      <th>Descrição</th>
							      <th>Responsável</th>
							      <th>Tarefa 1</th>
							      <th>Tarefa 1</th>
							    </tr>
							  </thead>
							  <tbody>
							  <?php
							  	do{
							  ?>


							    <tr>
							      <td><?php echo $linha['servid']; ?></td>
							      <td><?php echo $linha['servname']; ?></td>
							      <td><?php echo $linha['servdesc']; ?></td>
							      <td><?php echo $linha['servresp']; ?></td>
							      <td><?php echo $linha['taref1']; ?></td>
							      <td><?php echo $linha['taref2']; ?></td>
							    </tr>
							   <?php 
							   }while ($linha = $sql_query -> fetch_assoc());

							   ?>

							  </tbody>
						</table>
					</nav>
				</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/docs.min.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

