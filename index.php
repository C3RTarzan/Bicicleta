<?php
session_start();
$_SESSION['verific'] = true;
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
                    <span>Estamos sorteando uma Bicicleta Aro 29 Ksw Shimano 24 Vel A Disco Ltx no valor de R$2.499</span>
                    <span>em comemoração a 10 anos da VPIks atuando no esportes competitivos.</span>
                    <span>Então fique ligado e não perca essa oportunidade.</span><br/>
                    <img src="bicicleta.png"><br/>
                    <span>O Sorteador foi desenvolvido para ser fácil e rápido, permitindo que você realize os seus sorteios</span>
                    <span>sem complicação, bastando definir seu e-mail e o numero que deseja.</span>
                    <span>Simples, não?</span><br/>
                </div>
                <div class="form">
                    <div class="pai">
                        <form method="POST" action="draw.php">
                            <input type="email" name="email" placeholder="E-Mail" maxlength="30"><br/>
                            <input type="text" name="number" placeholder="Número" maxlength='2'><br/>
                            <input type="submit" value="OK"><br/>
                            <span>
                                <?php include 'exceptions.php'?>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body> 
</html>