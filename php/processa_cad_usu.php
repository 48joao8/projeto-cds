<?php
	include("conexao.php");

	$login_usu = $_POST['txt_login'];
	$senha_usu = $_POST['txt_senha'];
	$matr_usu = $_POST['txt_matr'];
	$nome_usu = $_POST['txt_nome'];
	$nivel_usu = $_POST['txt_nive'];

	$result_usu = "INSERT INTO usuarios (usuemail,usumat,ususenha,usunome,nvacesso) VALUES ('$login_usu','$matr_usu','$senha_usu','$nome_usu','$nivel_usu')";
	$resultado_usuario = mysqli_query($mysqli, $result_usu);
	if(mysqli_affected_rows($mysqli) !=0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0; URL =
			http://localhost:8080/projeto-cds/cadastro.php'>
			<script type=\"text/javascript\">
				alert(\"Usuario cadastrado com sucesso.\");
			</script>
		";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0; URL =
			http://localhost:8080/projeto-cds/cadastro.php'>
			<script type=\"text/javascript\">
				alert(\"Usuario não foi cadastrado com sucesso.\");
			</script>
			";
		}

?>