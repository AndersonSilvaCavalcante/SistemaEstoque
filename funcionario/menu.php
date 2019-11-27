<?php
    include_once 'session/iniciarsessao.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>LogEx Estoque</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script type="text/javascript" src="js/funcs.js"></script>
    <script defer src="js/solid.js"></script>
    <script defer src="js/fontawesome.js"></script>
    <script src="js/jquery.min.js">
    </script>
    <script src="js/jquery.maskMoney.js">
    </script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>LogEx</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="menu.php">Início</a>
                </li>
                <li>
                    <a href="menu.php?p=form_produtos.php">Cadastrar Produto</a>
                </li>
                <li>
                    <a href="menu.php?p=produtos.php">Consultar Estoque</a>
                </li>
                <li>
                    <a href="menu.php?p=ver_pesquisa.php">Pesquisar produto</a>
                </li>
                <li>
                    <a href="menu.php?p=retirar_produto.php">Retirar Produto</a>
                </li>
                <li>
                    <a href="menu.php?p=atualizar_prod.php">Atualizar Produto</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Experimentais</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Curva ABC</a>
                        </li>
                        <li>
                            <a href="#">Enviar Mensagem</a>
                        </li>
                        <li>
                            <a href="#">Posição no Estoque</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="session/logout.php">Sair</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content" class="bg-secondary">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary custom">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <span style="color: white;"><img src="view/icons/user.png" style="width:25%;">&nbsp;&nbsp;<?php echo $_SESSION['nome'];?></span>
                </div>
            </nav>

            <?php
            $valor = isset($_GET['p']) == true ? $_GET['p'] : "";
            if ($valor == "") {
                echo "
                        <div class='container col-md-12'>
                            <br>
                            <br>
                            <br>
                                <div class='container col-md-3'>
                                    <h1 class='text-white'>Bem vindo!</h1>
                                </div>
                        </div>";
            } else {
                include_once $valor;
            }
            ?>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="js/popper.min.js"> </script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js">
    </script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>