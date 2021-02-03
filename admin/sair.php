<?php
session_start();
$_SESSION['nome_cargo'] = 'user';
header('Location: index.php');
exit();

?>