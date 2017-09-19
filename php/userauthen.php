<?php include("conexao.php"); 
	if(isset($_POST['login']) && strlen($_POST['login']) >0){
		session_start();
		



	if((isset($_POST['matr'])) && (isset($_POST['login']))){
		$matr = mysqli_real_escape_string($mysqli, $_POST['matr']);

		$login = mysqli_real_escape_string($mysqli, $_POST['login']);
	
		$senha = md5(($_POST['senha']));

		$sql = "SELECT usumat, usuemail, ususenha FROM usuarios WHERE usumat = '$matr' AND usuemail = '$login' /*AND ususenha= '$senha'*/ LIMIT 1";
		$result = mysqli_query($mysqli, $sql);
		$resultado = mysqli_fetch_assoc ($result);

		
		

		if(empty($resultado)){
			$_SESSION['loginErro'] ="Usuário ou senha inválidada";
			
			header("Location: ..\index.php");
			}elseif(isset($resultado)){
				$_SESSION['matr'] = $matr;
				
				//$_SESSION['usuemail'] = $resultado[login];
				

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


	}


?>
