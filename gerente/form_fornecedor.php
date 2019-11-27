<?php
    include_once 'session/iniciarsessao.php';
?>
<body>
        <br>
        <br>
        <br>
        <div class="container col-md-5 bg-white" style="border-radius: 1.5%;">
            <form action="cadastrar_forn.php" class="form-group" method="POST">
                <br>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nome do Fornecedor</label>
                        <input type="text" name="nomeF" class="form-control" required="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Endereço</label>
                        <input type="text" name="endereco" maxlength="30" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Telefone</label>
                        <input type="text" name="telefone" class="form-control" required="" maxlength="11" placeholder="DDD+9+numero">
                    </div>
                    <div class="form-group col-md-6">
                        <label>CNPJ</label>
                        <input type="text" name="cnpj" class="form-control" required="" maxlength="14" placeholder="12345678912345">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="submit" value="Cadastrar" class="form-control btn bg-info" style="color:white;">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="reset" class="form-control btn bg-danger" style="color:white;">
                    </div>
                </div>
            </form>
        </div>
</body>