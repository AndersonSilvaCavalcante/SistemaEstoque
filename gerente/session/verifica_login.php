<?php 

@session_start();


if(!$_SESSION['usuario']) {
		header('location: loginG.php');
		exit();
	}
 ?>