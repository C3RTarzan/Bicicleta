<?php
session_start();
include('conection.php');


//verificação
if(empty($_POST['email']) || empty($_POST['number'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: index.php');
    exit();
}
if(!is_numeric($_POST['number'])){
    $_SESSION['nao_numero'] = true;
    header('Location: index.php');
    exit();
}


//verificar se existe
$email = mysqli_real_escape_string($conexao, $_POST['email']);  // criando variavel
$number = mysqli_real_escape_string($conexao,$_POST['number']);  // criando variavel
$query = "select * from drawn where email = '{$email}'"; //consulta com bd

$result = mysqli_query($conexao, $query); // juntas os 2
$row = mysqli_num_rows($result); // verificar se existe uma linha
if($row > 0){
    $_SESSION['existe'] = true;
    header('Location: index.php');
    exit();
}else{
    $query = "INSERT into drawn (email, num) VALUES ('$email', '$number')"; //Registrar o e-mail/numero
    $result = mysqli_query($conexao, $query); // juntas os 2
    $_SESSION['registrado'] = true;
    header('Location: index.php');
    exit();
}
?>