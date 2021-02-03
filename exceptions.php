<?php
    if(isset($_SESSION['campos_branco'])): ?>
        <script>var heightPage = document.body.scrollHeight; window.scrollTo(0 , heightPage);</script>
        <p><small><small> Preencha todos os campos. </small></small></p>          
<?php
endif;
unset($_SESSION['campos_branco']);
?>
<?php
    if(isset($_SESSION['existe'])): ?>
        <script>var heightPage = document.body.scrollHeight; window.scrollTo(0 , heightPage);</script>
        <p><small><small> Esse E-mail já registrou um numero.</small></small></p>          
<?php
endif;
unset($_SESSION['existe']);
?>
<?php
    if(isset($_SESSION['nao_numero'])): ?>
        <script>var heightPage = document.body.scrollHeight; window.scrollTo(0 , heightPage);</script>
        <p><small><small> Só aceitamos numeros.</small></small></p>          
<?php
endif;
unset($_SESSION['nao_numero']);
?>
<?php
    if(isset($_SESSION['registrado'])): ?>
        <script>var heightPage = document.body.scrollHeight; window.scrollTo(0 , heightPage);</script>
        <p><small><small> Seu número foi registrado com sucesso</small></small></p>      
        <p><small><small> nos vemos no dia do sorteio.</small></small></p>         
<?php
endif;
unset($_SESSION['registrado']);
?>