<?php
session_start();
require_once 'lib/otphp.php';
//date_default_timezone_set('America/Sao_Paulo');
include('css.php');
if(isset($_SESSION['id'])){
	$id = $_SESSION['id'];
	include('conexao.php');
	//$sresult=mysqli_fetch_array(mysqli_query($conexao,"select order_st_status from user_tb_order where res_in_id='$id' limit 1"));
	//$status = $sresult['order_st_status'];
	$dresult=mysqli_fetch_array(mysqli_query($conexao,"select res_st_devkey from user_tb_register where res_in_id='$id' limit 1"));
	$devkey = $dresult['res_st_devkey'];
	}
else{
	$devkey = "Necessário estar logado!";
	echo "<script>alert('$devkey');</script>";
}

$totp = new \OTPHP\TOTP(sha1($devkey . $_SESSION['qcverify']));
//echo $totp->now();
if ($totp->verify($_POST['verify'])){
	
	header("Location: checkout_pass.php");
	echo '<script>window.location.replace("checkout_pass.php");</script>';
}
else{
	//echo '<script>window.location.replace("modal.php");</script>';
	sleep(6);
	echo '<script>window.alert("Código de verificação inválido"); window.history.back();</script>';
}
?>
