<?php 
session_start();
include_once("conexao.php");
$reais = $_POST['realInput'];
$crypto1 = $_POST["cryInput"];
$symbol = $_SESSION['symbol'];
$wallet = $_POST["walletInput"];
$id = $_SESSION['id'];

//if para o coin_in_id
if($symbol == "BTC"){
    $symbol=1;
}else if($symbol == "ETH"){
    $symbol=2;
}else if($symbol == "LTC"){
    $symbol=3;
}else{
    $symbol=4;
} 

$query = "INSERT INTO user_tb_order(res_in_id,coin_in_id,wallet_st_addr,order_re_vlr,order_re_price,order_dt_date,order_in_status) values ('$id','$symbol','$wallet','$crypto1','$reais',NOW(),'1')";
$resultado= mysqli_query($conexao,$query);
if(mysqli_insert_id($conexao)){
    //echo '<script>alert("Compra feita com sucesso! Espere a nossa confirmação"); location.href = "index.php";</script>';
    header("Location: checkout_auth.php");
	}else{
    echo "Your query failed: " . mysqli_error($conexao);
	echo '<script>alert("Error! Nenhum será inserido. Tente de novo"); </script>';
}
?>
