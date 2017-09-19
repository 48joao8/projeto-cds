<?php 
	session_start();

	unset(
		$_SESSION['userLogin'],
		$_SESSION['userMatr']
		);

	session_destroy();


	header("Location: ..\index.php");

 ?>