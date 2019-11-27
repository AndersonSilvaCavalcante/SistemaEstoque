<?php
    include_once 'conexao.php';
    include_once 'session/iniciarsessao.php';

    $nome = isset($_POST['nome']) == true ?$_POST['nome']:"";
    $fornecedor = isset($_POST['fornecedor']) == true ?$_POST['fornecedor']:"";
    $qtd = isset($_POST['quantidade']) == true ?$_POST['quantidade']:"";
    $validade = isset($_POST['validade']) == true ?$_POST['validade']:"";
    $tipo = isset($_POST['tipo']) == true ?$_POST['tipo']:"";
    $preco = isset($_POST['preco']) == true ?$_POST['preco']:"";
    $fila = isset($_POST['fila']) == true ?$_POST['fila']:"";
    $setor = isset($_POST['setor']) == true ?$_POST['setor']:"";
    $bloco = isset($_POST['bloco']) == true ?$_POST['bloco']:"";

    $sql = "INSERT INTO produtos(nome, fornecedor, quantidade, validade, tipo, preco, setor, fila, bloco) values ('$nome','$fornecedor','$qtd','$validade','$tipo','$preco','$setor','$fila','$bloco');";
    //*print $sql;
    if ($con->query($sql) == true) {
		  header('Location:menu.php?p=produtos.php');
	  } else{
		  echo "Error: ".$sql."<br>".$con->error;
	  }
	  $con->close();
?>