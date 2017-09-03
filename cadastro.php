<?php
	session_start();
	echo "Usuario: ". $_SESSION['userLogin'];



 ?>

 <html>
 	<head>
 		<title>Cadastro</title>
 	</head>
 	<body>
 		<form method="POST" action="php\processa_cad_usu.php">
 			Login<input type="text" name="txt_login" placeholder="Login"><br><br>
			Matricula<input type="number" name="txt_matr" placeholder="Matricula"><br><br>
 			<input type="submit" value="Cadastrar">
 		</form>

 	 <a href="php\sair.php">Sair</a><br><br>
 	 <a href="administrativo.php">Página Administrativa</a>

 	</body>
 </html>