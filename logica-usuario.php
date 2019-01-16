<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
function usuarioEstaLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado() {
	return $_SESSION["usuario_logado"];
}

function logaUsuario($email) {
	$_SESSION["usuario_logado"] = $email;
}

function logout() {
	session_destroy();
	session_start();
}