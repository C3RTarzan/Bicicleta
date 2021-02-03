<?php
session_start();
include('../conection.php');
if(empty($_POST['nick']) || empty($_POST['senha'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: index.php');
    exit();
}

//login
$usuario = mysqli_real_escape_string($conexao, $_POST['nick']);  // criando variavel
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);  // criando variavel
$query = "select * from admin where user = '$usuario' and pass = '$senha'"; //consulta com bd

$result = mysqli_query($conexao, $query); // juntas os 2
$row = mysqli_num_rows($result); // verificar se existe uma linha

if($row > 0){
    $_SESSION['nome_cargo'] = 'admin';
    header('Location: painel_admin.php'); // se for para onde vai ser redirecionado
    exit();
}else{
    $_SESSION['nao_autentificado'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}
?>