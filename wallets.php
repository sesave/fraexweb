<?php 
session_start();
include_once("conexao.php");
$bitcoin = $_POST['bitcoinw'];
$ethereum = $_POST['ethereumw'];
$litecoin = $_POST['litecoinw'];
$cardano = $_POST['cardanow'];
$id = $_SESSION["id"];
$query = "INSERT INTO user_tb_wallets(wallet_st_addr,res_in_id,coin_in_id) values ('$bitcoin',$id,1) where res_in_id = $id LIMIT 1";
$query2 = "INSERT INTO user_tb_wallets(wallet_st_addr,res_in_id,coin_in_id) values ('$ethereum',$id,2) where res_in_id = $id LIMIT 1";
$query3 = "INSERT INTO user_tb_wallets(wallet_st_addr,res_in_id,coin_in_id) values ('$litecoin',$id,3) where res_in_id = $id LIMIT 1";
$query4 = "INSERT INTO user_tb_wallets(wallet_st_addr,res_in_id,coin_in_id) values ('$cardano',$id,4) where res_in_id = $id LIMIT 1";
$resultado= mysqli_query($conexao,$query);
if(mysqli_insert_id($conexao)){
	header("Location: profile.php");
}else{?>
	<script>alert("Error! Any data will be updated. Try again");</script>
<?php
	header("Location: profile.php");
}

?>