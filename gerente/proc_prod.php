<?php
// Incluir aquivo de conex�o
include_once 'conexao.php';
include_once 'session/iniciarsessao.php';
// Recebe o valor enviado
$valor = $_GET['valor'];

// Procura titulos no banco relacionados ao valor
$consultar = $con->query("SELECT * FROM produtos WHERE id LIKE '%" . $valor . "%'");

// Exibe todos os valores encontrados

while ($dados = $consultar->fetch_assoc()) {

    $id = $dados['id'];
    $nome = $dados['nome'];
    $fornecedor = $dados['fornecedor'];
    $qtd = $dados['quantidade'];
    $validade = $dados['validade'];
    $tipo = $dados['tipo'];
    $preco = $dados['preco'];
    $fila = $dados['fila'];
    $setor = $dados['setor'];
    $bloco = $dados['bloco'];

    //*Verificação de data de vencimento//
    $dataatual = date("Y-m-d");

    //* converte as datas para o formato timestamp
    $d1 = strtotime($validade);
    $d2 = strtotime($dataatual);

    //* verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
    $valida = ($d2 - $d1) / 86400;

    //* caso a data 2 seja menor que a data 1
    $valida = $valida * -1;

    //*Converte o resulta para int caso fique quebrado
    $valida = intval($valida);

    //* Faz verificação da quantidade de dias
    if (($valida <= 30) && ($valida > 0)) {
        $status = "<img src='view/icons/vermelho.png' class='rounded-circle'>";
    } else if (($valida > 30) && ($valida < 60)) {
        $status = "<img src='view/icons/amarelo.png' class='rounded-circle'>";
    } else if ($valida > 60) {
        $status = "<img src='view/icons/verde.png' class='rounded-circle'>";
    } else if ($valida <= 0) {
        $status = "Vencido";
    }

    //*Verifica se a data de vencimento é de um produto que não possui
    if ($validade == "") {
        $validade = "Não possui";
        $status = "--";
    }

    //*Imprime os valores da tabela
    echo "
    <div class='container col-md-6 bg-white'>
    <br>
    <form action='retirar.php?id=$id' method='POST'>
    <div class='form-row'>
        <div class='form-group col-md-4'>
            <label>Nome do Produto</label>
            <input type='text' value='$nome' class='form-control' disabled=''>
        </div>
        <div class='form-group col-md-6'>
            <label>Fornecedor</label>
            <input type='text' value='$fornecedor' class='form-control' disabled=''>
        </div>
        <div class='form-group col-md-1'>
            <label>Status</label>
                <p align='center'>$status</p>
        </div>
    </div>    
    <div class='form-row'>
        <div class='form-group col-md-6'>
            <label>Tipo</label>
            <input type='text' value='$tipo' class='form-control' disabled=''>
        </div>
        <div class='form-group col-md-2'>
            <label>Fila</label>
            <input type='text' value='$fila' class='form-control' disabled=''>
        </div>
        <div class='form-group col-md-2'>
            <label>Setor</label>
            <input type='text' value='$setor' class='form-control' disabled=''>
        </div>
        <div class='form-group col-md-2'>
            <label>Bloco</label>
            <input type='text' value='$bloco' class='form-control' disabled=''>
        </div>
    </div>
    <div class='form-row'>
        <div class='form-group col-md-3'>
            <label>Validade</label>
            <input type='text' class='form-control' value='$validade' disabled=''>
        </div>
        <div class='form-group col-md-3'>
            <label>Preço R$</label>
            <input type='text' value='$preco' class='form-control' disabled=''>
        </div>
        <div class='form-group col-md-3'>
            <label>Qtd Disponível</label>
            <input type='text' value='$qtd' class='form-control' disabled=''>
        </div>
        <div class='form-group col-md-3'>
            <label>Qtd p/ retirar</label>
            <input type='text' name='qRetira' class='form-control' required=''>
        </div>
    </div>
    <div class='form-row'>
        <div class='form-group col-md-3'>
            <button type='submit' class='form-control btn bg-info' style='color:white;'>Retirar</button>
        </div>
    </div>
    </form>
</div>
<br>
    ";
}
