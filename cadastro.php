<?php
	session_start();
	



 ?>

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
 	<body>
 		<form method="POST" action="php\processa_cad_usu.php">
 			Login<input type="text" name="txt_login" placeholder="Login" maxlength="15" class="form-control"><br><br>
 			Nome<input type="text" name="txt_nome" placeholder="Nome" maxlength="30" class="form-control"><br><br>
 			Senha<input type="password" name="txt_senha" placeholder="Senha" maxlength="15" class="form-control"><br><br>
			Matricula<input type="text" name="txt_matr" placeholder="Matricula" class="form-control"><br><br>
 			<input type="submit" value="Cadastrar">
 		</form>

 	 <a href="php\sair.php">Sair</a><br><br>
 	 <a href="administrativo.php">Página Administrativa</a>

 	</body>
 </html>