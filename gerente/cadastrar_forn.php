<?php
    include_once 'conexao.php';
    include_once 'session/iniciarsessao.php';

    $nome = isset($_POST['nomeF']) == true ?$_POST['nomeF']:"";
    $cnpj = isset($_POST['cnpj']) == true ?$_POST['cnpj']:"";
    $telefone = isset($_POST['telefone']) == true ?$_POST['telefone']:"";
    $endereco = isset($_POST['endereco']) == true ?$_POST['endereco']:"";

    $sql = "INSERT INTO fornecedores(nome, cnpj, telefone, endereco) values ('$nome','$cnpj','$telefone','$endereco');";
    //*print $sql;
    if ($con->query($sql) == true) {
		  header('Location:menu.php?p=ver_fornecedor.php');
	  } else{
		  echo "Error: ".$sql."<br>".$con->error;
	  }
	  $con->close();
?>