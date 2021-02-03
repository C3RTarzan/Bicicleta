<?php
include('conection.php');

date_default_timezone_set('America/Sao_Paulo');
$hoje = date('Y/m/d');

$query = "select * from sorteio"; //consulta com bd

$result = mysqli_query($conexao, $query); // juntas os 2
$dado = mysqli_fetch_array($result); // extrair dados da tabela sql
$row = mysqli_num_rows($result); // verificar se existe uma linha

$_SESSION['datasort'] = $dado['datasort'];
$data = $_SESSION['datasort'];
$_SESSION['num'] = $dado['num'];
$num = $_SESSION['num'];

$dataHoje1 = array("/");
$dataHoje2 = array("");
$dataHoje = str_replace($dataHoje1, $dataHoje2, $hoje);


$datasorteio1 = array("-");
$datasorteio2 = array("");
$datasorteio = str_replace($datasorteio1, $datasorteio2, $data);

if($row > 0){
    if($dataHoje >= $datasorteio){
        $_SESSION['sorteio_on'] = true;
        $_SESSION['verific'] = false;
        header('Location: result.php');
        exit();
    } 
    $_SESSION['sorteio_off'] = true;
    $_SESSION['verific'] = false;
        header('Location: result.php');
    exit();
}else{
    $_SESSION['sorteio_indisponivel'] = true;
    header('Location: result.php');
        echo 'off';
    exit();
}
?>