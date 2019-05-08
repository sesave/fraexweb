<?php 
session_start();
include_once("conexao.php");
$reais = $_POST['realInput'];
$crypto1 = $_POST["cryInput"];
$symbol = $_SESSION['symbol'];
$wallet = $_POST["walletInput"];
$id = $_SESSION['id'];
$btc = "BTC";
$eth = "ETC";
$ltc = "LTC";
$ada = "ADA";

//if para o coin_in_id
if('$symbol' == '$btc'){
    $symbol=1;
}else if('$symbol' == '$eth'){
    $symbol=2;
}else if('$symbol' == '$ltc'){
    $symbol=3;
}else{
    $symbol=4;
} 

$query = "INSERT INTO user_tb_order(res_in_id,coin_in_id,wallet_st_addr,order_re_vlr,order_re_price,order_dt_date,order_st_status) values ('$id','$symbol','$wallet','$crypto1','$reais',NOW(),'nao_verificado')";
$resultado= mysqli_query($conexao,$query);
if(mysqli_insert_id($conexao)){
    //echo '<script>alert("Compra feita com sucesso! Espere a nossa confirmação"); location.href = "index.php";</script>';
    header("Location: checkout_auth.php");
	}else{
    echo "Your query failed: " . mysqli_error($conexao);
	echo '<script>alert("Error! Nenhum será inserido. Tente de novo"); window.history.back();</script>';
}
?>
