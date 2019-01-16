<?php

function listaMoedas($conexao){
	$moedas = array();
	$query = "select * from moedas";
	$resultado = mysqli_query($conexao,$query);
	while ($moeda = mysqli_fetch_assoc($resultado)) {
		array_push($moedas, $moeda);
	}
	return $moedas;
	die();
}

function listaCoins($conexao){
	$coins = array();
	$query = "select * from glo_tb_coin";
	$resultado = mysqli_query($conexao,$query);
	while ($coin = mysqli_fetch_assoc($resultado)) {
		array_push($coins, $coin);
	}
	return $coins;
	die();
}