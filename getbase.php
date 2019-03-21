<?php
if(isset($_REQUEST['base'])){
	$base = $_REQUEST['base'];
	$_SESSION['base']=$base;
	$json = file_get_contents("http://free.currencyconverterapi.com/api/v6/convert?q=USD_BRL&compact=ultra&apiKey=d6fc420a4a4d30c591a1");
	$obj = json_decode($json); 
	$price = $obj->{'USD_BRL'};
	echo "	<script>getbase = '$price';</script>\n";
}else{
	return 0;
}
?>
