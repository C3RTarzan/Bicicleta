<?php
session_start();
include('../conection.php');

if(empty($_POST['data']) || empty($_POST['numero'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: painel_admin.php');
    exit();
}
if(!is_numeric($_POST['numero'])){
    $_SESSION['erro_number'] = true;
    header('Location: painel_admin.php');
    exit();  
}
$querydells = "DELETE FROM sorteio";
$querydelld = "DELETE FROM drawn";
$resultdells = mysqli_query($conexao, $querydells);
$resultdells = mysqli_query($conexao, $querydelld);

$data = $_POST['data'];  // criando variavel
$numero = $_POST['numero'];  // criando variavel
$query = "INSERT into sorteio (datasort, num) VALUES ('$data', '$numero')";

$result = mysqli_query($conexao, $query);

$query_verificar = "select * from sorteio where datasort = '$data' and num = '$numero'"; //consulta com bd
$result_verificar = mysqli_query($conexao, $query_verificar); // juntas os 2
$row_verificar = mysqli_num_rows($result_verificar); // verificar se existe uma linha

if($row_verificar > 0){
    $_SESSION['registrado'] = true;
    header('Location: painel_admin.php'); // se for para onde vai ser redirecionado
    exit();
}


?>