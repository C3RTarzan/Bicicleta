<?php
session_start();
if($_SESSION['nome_cargo'] != 'admin'){
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="estilo/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
        <link href="../css.css" rel="stylesheet" />
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
                    <a href="../index.php">Home</a>
                    <a href="../result.php">Resultado</a>
                </ul>
            </div>
        </header>

        <section>
            <div class="Dados">
                <div class="span">
                    <form method="POST" action="admin.php">
                        <input type="date" name="data" placeholder="Data"><br/>
                        <input type="text" name="numero" placeholder="Numero do sorteio" maxlength="2"><br/>
                        <input type="submit" name="ok" value="OK">
                        <?php
                            if(isset($_SESSION['campos_branco'])): ?>
                                <p><small><small> Preencha todos os campos. </small></small></p>          
                        <?php
                            endif;
                            unset($_SESSION['campos_branco']);
                        ?>
                        <?php
                            if(isset($_SESSION['registrado'])): ?>
                                <p><small><small> Sorteio registrado com sucesso. </small></small></p>          
                        <?php
                            endif;
                            unset($_SESSION['registrado']);
                        ?>
                        <?php
                            if(isset($_SESSION['erro_number'])): ?>
                                <p><small><small> Sorteio só funciona com numeros. </small></small></p>          
                        <?php
                            endif;
                            unset($_SESSION['erro_number']);
                        ?>
                    </form>
                    <a href="sair.php">Sair</a>
                </div>
            </div>
        </section>
    </body> 
</html>