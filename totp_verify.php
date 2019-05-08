<?php
session_start();
require_once 'lib/otphp.php';
//date_default_timezone_set('America/Sao_Paulo');
include('css.php');
if(isset($_SESSION['email'])){
	$login = $_SESSION['email'];
	include('conexao.php');
	$resultf=mysqli_fetch_array(mysqli_query($conexao,"select res_st_devkey from user_tb_register where res_st_email='$login' limit 1"));
	$devkey=$resultf['res_st_devkey'];
}
else{
	$devkey = "Necessário estar logado!";
	echo "<script>alert('$devkey');</script>";
}

$totp = new \OTPHP\TOTP(sha1($devkey . $_SESSION['qcverify']));
//echo $totp->now();
if ($totp->verify($_POST['verify'])){
	echo '<script>window.alert("Código verificado com sucesso!");</script>';
}
else{
	//echo '<script>window.location.replace("modal.php");</script>';
	sleep(6);
	echo '<script>window.alert("Código de verificação inválido"); window.history.back();</script>';
}
?>
