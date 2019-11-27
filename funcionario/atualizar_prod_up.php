<?php
// Incluir aquivo de conex�o
include_once 'conexao.php';
include_once 'session/iniciarsessao.php';
// Recebe o valor enviado
$id = $_GET['id'];
$qSoma = isset($_POST['qSoma']) == true ? $_POST['qSoma'] : "";
$nPreco = isset($_POST['preco']) == true ? $_POST['preco'] : "";

// Procura a quantidade referente ao id no banco
$consultar = $con->query("SELECT * FROM produtos WHERE id LIKE '%" . $id . "%'");
$dados = $consultar->fetch_assoc();
$aQtd = $dados['quantidade'];
$aPreco = $dados['preco'];

//Faz mostrar se preço mudou ou não
if ($aPreco != $nPreco) {
    $precoMod = "<div class='form-group'>
                    <p class='text-dark' class='text-center'>Novo Preço: R$$nPreco</p>
                </div>";
} else {
    $precoMod = "<div class='form-group'>
                    <p class='text-dark' class='text-center'>Preço não modificado, Preço: R$$nPreco</p>
                </div>";
}

//Verifica se os valores são válidos e executa o UPDATE
if ($qSoma <= 0) {
    echo "
    <title>Atualizar Produto</title>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <body class='bg-secondary'>
    <div class='container col-md-12center-block' style='width:100%;'>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class='container col-md-6 bg-white center-block' style='width:40%; border-radius:3%;'>
        <br>
            <div class='form-group'>
                <h2 class='text-center text-uppercase'>Valor inválido</h2>
            </div> 
            <div class='form-group'>
                <p class='text-dark' class='text-center'>Valor digitado: $qSoma</p>
            </div>
            <div class='form-group'>   
                <button OnClick='window.history.back()' class='btn btn-danger'>Voltar</button>
            </div>
            <br>    
        </div>
    </div>
    ";
} else {
    //Soma a quantidade digitada com a do banco de dados
    $nQtd = $aQtd + $qSoma;
    $sql = "UPDATE produtos SET quantidade = $nQtd, preco = $nPreco WHERE id=$id;";
    //*print $sql;
    if ($con->query($sql) == true) {
        echo "
    <title>Atualizar Produto</title>
    <body class='bg-secondary'>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <div class='container col-md-12center-block' style='width:100%; border-radius:3%;'>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class='container col-md-6 bg-white center-block' style='width:40%;'>
        <br>
            <div class='form-group'>
                <h2 class='text-center text-uppercase'>Atualizado com sucesso</h2>
            </div> 
            <div class='form-group'>
                <p class='text-dark' class='text-center'>Quantidade adicionada: $qSoma</p>
            </div>
            <div class='form-group'>
                <p class='text-dark' class='text-center'>Nova quantidade disponível: $nQtd</p>
            </div>
            $precoMod
            <div class='form-group'>   
                <a href='menu.php?p=produtos.php' class='btn'><button class='btn btn-primary text-white''>Avançar</button></a>
            </div>
            <br>    
        </div>
    </div>
    ";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
}
