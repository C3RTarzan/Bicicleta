<?php
session_start();
if($_SESSION['nome_cargo'] == 'admin'){
    header('Location: painel_admin.php');
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
                    <form method="POST" action="acont.php">
                        <input type="text" name="nick" placeholder="User"><br/>
                        <input type="password" name="senha" placeholder="Senha"><br/>
                        <input type="submit" name="ok" value="OK">
                        <?php
                            if(isset($_SESSION['campos_branco'])): ?>
                                <p><small><small> Preencha todos os campos. </small></small></p>          
                        <?php
                            endif;
                            unset($_SESSION['campos_branco']);
                        ?>
                        <?php
                            if(isset($_SESSION['nao_autentificado'])): ?>
                                <p><small><small> Erro, login invalido. </small></small></p>          
                        <?php
                            endif;
                            unset($_SESSION['nao_autentificado']);
                        ?>
                    </form>
                </div>
            </div>
        </section>
    </body> 
</html>