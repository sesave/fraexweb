<?php
if(isset($_REQUEST['base'])){
	$base = $_REQUEST['base'];
	$json = file_get_contents("http://free.currencyconverterapi.com/api/v6/convert?q=USD_$base&compact=y");
	$obj = json_decode($json,true); 
	$price = 1; //$obj->{'USD_BRL'};
	echo "	<script>getbase = '$price';</script>\n";
}else{
	return 0;
}
?>
