<?php
    include_once 'conexao.php';
    include_once 'session/iniciarsessao.php';

    $nome = isset($_POST['nomeU']) == true ?$_POST['nomeU']:"";
    $email = isset($_POST['email']) == true ?$_POST['email']:"";
    $senha= isset($_POST['senha']) == true ?$_POST['senha']:"";

    $sql = "INSERT INTO usuarios(nome, email, senha) values ('$nome','$email','$senha');";
    //*print $sql;
    if ($con->query($sql) == true) {
		  header('Location:menu.php?p=usuarios.php');
	  } else{
		  echo "Error: ".$sql."<br>".$con->error;
	  }
	  $con->close();
?>