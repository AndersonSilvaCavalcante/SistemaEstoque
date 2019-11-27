<?php
    include_once 'session/iniciarsessao.php';
?>
<body>
        <br>
        <br>
        <br>
        <div class="container col-md-5 bg-white" style="border-radius: 1.5%;">
            <form action="cadastrar_user.php" class="form-group" method="POST">
                <br>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nome do Funcionário</label>
                        <input type="text" name="nomeU" class="form-control" required="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Email</label>
                        <input type="email" name="email" maxlength="60" class="form-control" required="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Senha</label>
                        <input type="password" name="senha" class="form-control" required="" maxlength="8" minlength="4" placeholder="Max. 8 e Min. 4">
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