<?php
require_once("conexao.php");	
function listaUser($conexao){
	$users = array();
	$email = $_SESSION["email"];
	$query = "select * from user_tb_register where res_st_email='{$email}'";
	$resultado = mysqli_query($conexao,$query);
	while ($user = mysqli_fetch_assoc($resultado)) {
		array_push($users, $user);
	}
	return $users;
	die();
}