<?php
// Incluir aquivo de conex�o
include_once 'conexao.php';

include_once 'session/iniciarsessao.php';

// Recebe o valor enviado
$id = $_GET['id'];
$rQtd = isset($_POST['qRetira']) == true ? $_POST['qRetira'] : "";

// Procura a quantidade referente ao id no banco
$consultar = $con->query("SELECT * FROM produtos WHERE id LIKE '%" . $id . "%'");
$dados = $consultar->fetch_assoc();
$aQtd = $dados['quantidade'];

//Verifica se os valores são válidos e executa o UPDATE
if ($rQtd <= 0) {
    echo "
    <link rel='stylesheet' href='css/bootstrap.css'>
    <div class='container col-md-12center-block' style='width:100%;'>
        <br>
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
                <p class='text-dark' class='text-center'>Valor digitado: $rQtd</p>
            </div>
            <div class='form-group'>   
                <button OnClick='window.history.back()' class='btn btn-danger'>Voltar</button>
            </div>
            <br>    
        </div>
    </div>
    ";
} else if ($rQtd > $aQtd) {
    echo "
    <link rel='stylesheet' href='css/bootstrap.css'>
    <div class='container col-md-12center-block' style='width:100%;'>
        <br>
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
                <h2 class='text-center text-uppercase'>Valor maior do que o disponível!</h2>
            </div> 
            <div class='form-group'>
                <p class='text-dark' class='text-center'>Valor digitado: $rQtd</p>
            </div>
            <div class='form-group'>
                <p class='text-dark' class='text-center'>Valor Disponível: $aQtd</p>
            </div>
            <div class='form-group'>   
                <button OnClick='window.history.back()' class='btn btn-danger'>Voltar</button>
            </div>   
             <br>
        </div>
    </div>
    ";
} else {
    //Subtrai dá quantidade que tem no BD o valor que deseja ser retirado
    $nQtd = $aQtd - $rQtd;
    $sql = "UPDATE produtos SET quantidade = $nQtd WHERE id=$id;";
    //*print $sql;
    if ($con->query($sql) == true) {
        echo "
    <link rel='stylesheet' href='css/bootstrap.css'>
    <div class='container col-md-12center-block' style='width:100%; border-radius:3%;'>
        <br>
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
                <h2 class='text-center text-uppercase'>Retirado com sucesso</h2>
            </div> 
            <div class='form-group'>
                <p class='text-dark' class='text-center'>Quantidade retirada: $rQtd</p>
            </div>
            <div class='form-group'>
                <p class='text-dark' class='text-center'>Nova quantidade disponível: $nQtd</p>
            </div>
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
