<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogEx Estoque</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
</head>

<body class="bg-secondary">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container col-md-12">
        <br>
        <div class="container col-md-4" style="background-color:#f57c00; border-radius: 10px;">
            <form action="session/loginCrud.php" class="form-group" method="POST">
                <br>
                <div class="text-white">
                    <h2 class="text-center">LogEx Estoque</h2>
                </div>
                <div class="form-group">
                    <label class="text-white">Email</label>
                    <input type="email" name="email" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label class="text-white">Senha</label>
                    <input type="password" name="senha" class="form-control" required="" maxlength="8" minlength="4">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <input type="submit" value="Entrar" class="form-control btn bg-info" style="color:white;">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="reset" class="form-control btn bg-danger" style="color:white;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>