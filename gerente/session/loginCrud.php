<?php 
  
  session_start();


  include_once '../conexao.php';
  

if (empty($_POST['email']) ||  empty($_POST['senha'])) {

    header('location: ../loginG.php');
    exit();


}

$email = mysqli_real_escape_string($con, $_POST['email']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);


$query = $con->query("select email, senha, nome from gerente where email = '{$email}' and senha = '{$senha}'");
$row = mysqli_num_rows($query);
$dados= $query->fetch_assoc();
$nome = $dados['nome'];

if ($row == 1) {
		$_SESSION['nome'] = $nome;
		$_SESSION['usuario'] = $email;
		header('location: ../menu.php');
		exit();	
}else{

	$_SESSION['nao_autenticado'] = true;
	header('location: ../loginG.php');
	exit();
}


 ?>


