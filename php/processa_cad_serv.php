<?php
	include("conexao.php");

	$nome_serv = $_POST['txt_nome_serv'];
	$decserv_serv = $_POST['txt_decserv'];
	$descresp_usu = $_POST['txt_descresp'];
	$tar1_serv = $_POST['serv_tar1']
	$tar2_serv = $_POST['serv_tar2']
	$tar3_serv = $_POST['serv_tar3'];

	$result_serv = "INSERT INTO servicos (servname,servdesc,servresp,taref1,taref2,taref3) VALUES ('$nome_serv','$decserv_serv','$descresp_usu','tar1_serv','tar2_serv','tar3_serv')";
	$resultado_serv = mysqli_query($mysqli, $result_serv);
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