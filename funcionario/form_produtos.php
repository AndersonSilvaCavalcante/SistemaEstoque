<?php
    include_once 'session/iniciarsessao.php';
?>
<body>
    <div class="container col-md-12">
        <br>
        <div class="container col-md-6 bg-white" style="border-radius: 1.5%;">
            <form action="cadastrar_produtos.php" class="form-group" method="POST">
                <br>
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" name="nome" class="form-control" required="">
                </div>
                <!-- Select que puxa informações os dados(options) do banco de dados. -->
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select name="fornecedor" class="form-control">
                        <?php
                        include_once 'conexao.php';
                        $consultar = $con->query("select*from fornecedores");
                        while ($dados = $consultar->fetch_assoc()) {
                            echo "<option value='$dados[nome]'>" . $dados['nome'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Quantidade</label>
                        <input type="text" name="quantidade" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-8">
                        <label>Validade</label>
                        <input type="date" name="validade" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>Tipo</label>
                    <input type="text" name="tipo" class="form-control" required="">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label>Fila</label>
                        <input type="text" name="fila" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Setor</label>
                        <input type="text" name="setor" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Bloco</label>
                        <input type="text" name="bloco" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Preço R$</label>
                        <input type="text" id="money" name="preco" class="money form-control" required="" placeholder="999.00" maxlength="6">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-8">
                            <input type="submit" value="Cadastrar" class="form-control btn bg-info" style="color:white;">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="reset" class="form-control btn bg-danger" style="color:white;">
                        </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('#money').maskMoney();
    </script>
</body>