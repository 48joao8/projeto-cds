

 <html>
 	<head>
 		<meta charset="utf-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Cadastro</title>


 		    <link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/responsive-slider.css" rel="stylesheet">
			<link rel="stylesheet" href="css/animate.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link href="css/style.css" rel="stylesheet">	
 	</head>
 	<body role="document">
 	<?php
 	//error_reporting(0);
 		if(isset($_POST['confirmar'])){
 			if(!isset($_SESSION))
 				session_start();


 			foreach ($POST as $chave => $valor)
 				$_SESSION[$chave] = $valor;

 				if(strlen($_SESSION['txt_login']) ==0)
 					$erro[] = "Preencha o login.";

 				if(strlen($_SESSION['txt_nome']) ==0)
 					$erro[] = "Preencha o nome.";

 				if(strlen($_SESSION['txt_senha']) >32)
 				$erro[] = "Preencha a senha corretamente.";

 				if (strcmp($_SESSION['txt_senha'], $_SESSION['txt_senha2']) != 0)
					$erro[] = "As senhas não batem.";

 				if(strlen($_SESSION['txt_matr']) ==0)
 					$erro[] = "Preencha a Matricula.";

 				if(strlen($_SESSION['niveldeacesso']) ==0)
 					$erro[] = "Preencha o Nível de Acesso.";
 				
 				if(count($erro) ==0){


 					}else{
 						echo "<div class ='erro'>";
	 					foreach ($erro as $valor) 
	 					echo "$valor <br>";

	 					echo "</div>";

 				}

 		}
 	 ?>

<br><br><br><br><br><br>



 	 
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
 		<form method="POST" action="php\processa_cad_usu.php">
 			Login<input type="text" name="txt_login" placeholder="Login" maxlength="15" class="form-control"><br><br>
 			Nome<input type="text" name="txt_nome" placeholder="Nome" maxlength="30" class="form-control"><br><br>
 			Senha<input type="password" name="txt_senha" placeholder="Senha" maxlength="30" class="form-control"><br><br>
 			Repetir Senha<input type="password" name="txt_senha2" placeholder="Senha" maxlength="30" class="form-control"><br><br>
			Matricula<input type="text" name="txt_matr" placeholder="Matricula" class="form-control"><br><br>
			Nível de Acesso<input type="number" name="txt_nive" placeholder="Nível de Acesso" class="form-control"><br><br>
 			<input type="submit" name="confirmar value="Cadastrar">
 		</form>

 	 <a href="php\sair.php">Sair</a><br><br>
 	 <a href="administrativo.php">Página Administrativa</a>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/docs.min.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>


 	</body>
 </html>