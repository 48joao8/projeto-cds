<?php
	include("conexao.php");

	$login_usu = $_POST['txt_login'];
	$matr_usu = $_POST['txt_matr'];

	$result_usu = "INSERT INTO usuarios (login,matr) VALUES ('$login_usu','$matr_usu')";
	$resultado_usuario = mysqli_query($mysqli, $result_usu);
	if(mysqli_affected_rows($mysqli) !=0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0; URL =
			http://localhost/arsha/cadastro.php'>
			<script type=\"text/javascript\">
				alert(\"Usuario cadastrado com sucesso.\");
			</script>
		";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0; URL =
			http://localhost/arsha/cadastro.php'>
			<script type=\"text/javascript\">
				alert(\"Usuario não foi cadastrado com sucesso.\");
			</script>
			";
		}

?>