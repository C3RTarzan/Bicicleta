<?php
session_start();
$verif = $_SESSION['verific'];
if($verif == true){
    include 'contador.php';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="estilo/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
        <link href="css.css" rel="stylesheet" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sorteio de Bicicleta">
        <meta name="keywords" content="Bicicleta,Sorteio,Gratis">
    </head>
    <body>
        <header>
            <div>
                <div class="Logo">
                </div>
                <ul class="Options">
                    <a href="index.php">Home</a>
                    <a href="result.php">Resultado</a>
                </ul>
            </div>
        </header>

        <section>
            <div class="Dados">
                <div class="span">
                    <br/>
                    <span>O ganhador da Bicicleta Aro 29 Ksw Shimano 24 Vel A Disco Ltx vai ser sorteada <?php $data = $_SESSION['datasort']; $datasorteio1 = array("-"); $datasorteio2 = array("/"); $datasorteio = str_replace($datasorteio1, $datasorteio2, $data); echo $datasorteio;?></span><br/>
                    <img src="bicicleta.png"><br/>
                    <span><?php include 'exceptionsResult.php' ?></span>
                </div>
            </div>
        </section>
    </body> 
    <?php
    $_SESSION['verific'] = true;
    ?>
</html>