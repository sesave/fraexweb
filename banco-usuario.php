<?php
require_once("conexao.php");			
function buscaUsuario($conexao, $email, $passwrd) {
	$senhamd5 = md5($passwrd);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from user_tb_register where res_st_email='{$email}' and res_st_passwrd='{$senhamd5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}