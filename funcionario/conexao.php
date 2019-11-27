<?php
    $con = mysqli_connect("localhost","anderson","anderson123","sistEstoque");
    if (!$con){
        die("Falha na Conexão. Tente novamente mais tarde!".mysqli_connect_error());
    }
?>