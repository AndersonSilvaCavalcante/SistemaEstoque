<?php
// Incluir aquivo de conex�o
include_once 'conexao.php';
include_once 'session/iniciarsessao.php';
// Recebe o valor enviado
$valor = $_GET['valor'];

// Procura titulos no banco relacionados ao valor
$consultar = $con->query("SELECT * FROM fornecedores WHERE nome LIKE '%" . $valor . "%'");

// Exibe todos os valores encontrados

while ($dados = $consultar->fetch_assoc()) {

    $id = $dados['id'];
    $nome = $dados['nome'];
    $endereco = $dados['endereco'];
    $telefone = $dados['telefone'];
    $cnpj = $dados['cnpj'];

    echo "
<body>
<br>
<br>
<br>
<div class='container col-md-5 bg-white' style='border-radius: 1.5%;'>
    <form action='atualizar_forn.php?id=$id' class='form-group' method='POST'>
        <br>
        <div class='form-row'>
            <div class='form-group col-md-12'>
                <label>Nome do Fornecedor</label>
                <input type='text' value='$nome' class='form-control'>
            </div>
        </div>
        <div class='form-row'>
            <div class='form-group col-md-12'>
                <label>Endereço</label>
                <input type='text' value='$endereco' maxlength='30' class='form-control'>
            </div>
        </div>
        <div class='form-row'>
            <div class='form-group col-md-6'>
                <label>Telefone</label>
                <input type='text' value='$telefone' class='form-control' required='' maxlength='11' placeholder='DDD+9+numero'>
            </div>
            <div class='form-group col-md-6'>
                <label>CNPJ</label>
                <input type='text' value='$cnpj' class='form-control' required='' maxlength='14' placeholder='12345678912345'>
            </div>
        </div>
        <div class='form-row'>
            <div class='form-group col-md-6'>
                <input type='submit' value='Atualizar' class='form-control btn bg-info' style='color:white;'>
            </div>
            <div class='form-group col-md-6'>
                <a href='menu.php?p=deletar_forn.php' class=''><button class='btn btn-danger text-white'>Apagar</button></a>
            </div>
        </div>
    </form>
</div>
</body>
    ";
}
