<?php
include_once 'conexao.php';
include_once 'session/iniciarsessao.php';
$consultar = $con->query("select * from produtos");
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
        <tbody>
            <tr>
                <td align='center'>$id</td>
                <td align='center'>$nome</td>
                <td align='center'>$fornecedor</td>
                <td align='center'>$qtd</td>
                <td align='center'>$tipo</td>
                <td align='center'>R$$preco</td>
                <td align='center'>$fila</td>
                <td align='center'>$setor</td>
                <td align='center'>$bloco</td>
                <td align='center'>$validade</td>
                <td align='center'>$status</td>
            </tr>
		</tbody>
            
    ";
}
