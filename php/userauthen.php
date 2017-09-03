<?php include("conexao.php"); 
	session_start();

	if((isset($_POST['matr'])) && (isset($_POST['login']))){
		$matr = mysqli_real_escape_string($mysqli, $_POST['matr']);
		$login = mysqli_real_escape_string($mysqli, $_POST['login']);

		$sql = "SELECT * FROM usuarios WHERE matr = '$matr' && login = '$login' LIMIT 1";
		$result = mysqli_query($mysqli, $sql);
		$resultado = mysqli_fetch_assoc ($result);


		if(empty($resultado)){
			$_SESSION['loginErro'] ="Usuário ou senha inválidada";
			header("Location: ..\index.php");
			}elseif(isset($resultado)){
				$_SESSION['userLogin'] = $resultado[login];
				$_SESSION['userMatr'] = $resultado[matr];

				header("Location: ..\administrativo.php");
			}else{
				$_SESSION['loginErro'] ="Usuário ou senha inválida";
				header("Location: ..\index.php");

				}

		}

		else{
			$_SESSION['loginErro'] ="Usuário ou senha inválida";
			header("Location: ..\index.php");
			}


	


?>
