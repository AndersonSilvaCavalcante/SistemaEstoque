<?php
    include_once 'conexao.php';
    include_once 'session/iniciarsessao.php';
    $id = $_GET['id'];

    $nome = isset($_POST['nomeF']) == true ?$_POST['nomeF']:"";
    $cnpj = isset($_POST['cnpj']) == true ?$_POST['cnpj']:"";
    $telefone = isset($_POST['telefone']) == true ?$_POST['telefone']:"";
    $endereco = isset($_POST['endereco']) == true ?$_POST['endereco']:"";

    $sql = "UPDATE fornecedores SET nome = $nome, cnpj = $cnpj, telefone = $telefone, endereco = $endereco WHERE id=$id;";
    //*print $sql;
    if ($con->query($sql) == true) {
		  header('Location:menu.php?p=ver_fornecedor.php');
	  } else{
		  echo "Error: ".$sql."<br>".$con->error;
	  }
	  $con->close();
?>