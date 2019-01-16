<?php
if(isset($_REQUEST['symbol'])){ 
	$symbol = $_REQUEST['symbol'];
	//$symbol = "BTCUSDT";
	$json = file_get_contents("https://api.binance.com/api/v1/ticker/price?symbol=$symbol");
	$obj = json_decode($json);
	$price = $obj->{'price'};
	echo "<script>getprice = '$price'; x = '$symbol';</script>\n";
	//echo "<script>document.write(pricef)</script>\n";
	//mysql_query("insert into glo_tb_coin (coin_re_lastprice) values ('$price') where coin_st_apisymbol = '$symbol'");
}else{
	return 0;
}
?>
