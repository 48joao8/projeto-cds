<?php
	include("conexao.php");
	session_start();
	$usuatu = $_SESSION['matr'];

	$_POST['serv_tar2'] = "teste";

	$nome_serv = $_POST['txt_nome_serv'];
	$decserv_serv = $_POST['txt_decserv'];
	$descresp_usu = $_POST['txt_descresp'];
	$tar1_serv = $_POST['serv_tar1'];

	$result_serv = "INSERT INTO servicos (servname, servdesc, servresp, taref1, idusernew) VALUES ('$nome_serv','$decserv_serv','$descresp_usu','$tar1_serv','$usuatu')";
	$resultado_serv = mysqli_query($mysqli, $result_serv);
	/*
	if(mysqli_affected_rows($mysqli) !=0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0; URL =
			http://localhost:8080/projeto-cds/cadserv.php'>
			<script type=\"text/javascript\">
				alert(\"Usuario cadastrado com sucesso.\");
			</script>
		";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0; URL =
			http://localhost:8080/projeto-cds/cadserv.php'>
			<script type=\"text/javascript\">
				alert(\"Usuario não foi cadastrado com sucesso.\");
			</script>
			";
		}*/

?>