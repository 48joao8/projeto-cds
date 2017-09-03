<?php 
	session_start();

	unset(
		$_SESSION['userLogin'],
		$_SESSION['userMatr']
		);


	header("Location: ..\index.php");

 ?>