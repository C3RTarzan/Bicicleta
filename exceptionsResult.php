<?php
    $data = $_SESSION['datasort'];
    //$data = date('d/m/Y');
    $datasorteio1 = array("-");
    $datasorteio2 = array("/");
    $datasorteio = str_replace($datasorteio1, $datasorteio2, $data);
    if(isset($_SESSION['sorteio_off'])): ?>
        <p><small><small> O Sorteio sera realizado no dia <?php echo $datasorteio;?>.</small></small></p><br/>            
<?php
    endif;
    unset($_SESSION['sorteio_off']);
?>
<?php
    include('conection.php');
    $num = $_SESSION['num'];

    $query = "select * from drawn where num = '$num'";
    $result = mysqli_query($conexao, $query);
    $quantia = mysqli_num_rows($result);
    $_SESSION['log'] = '';

    for($i = 0; $i< $quantia; $i++){
        $dado = mysqli_fetch_array($result);
        $log = $dado['email'];
        $logsec = $_SESSION['log'];
        $_SESSION['log'] = "$log <br/> $logsec";
    }
    if($_SESSION['log'] == ''){
        $_SESSION['log'] = 'Não teve ganhadores';
    }
    if(isset($_SESSION['sorteio_on'])): ?>
        <p><small><small>O numero sorteado foi <?php echo $_SESSION['num'] ?>, os sorteados foram:</small></small></p>     
        <p><small><small><?php echo $_SESSION['log']; ?></small></small></p><br/>        
<?php
    endif;
    unset($_SESSION['sorteio_on']);
?>
