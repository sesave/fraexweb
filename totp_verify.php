<?php
require_once 'lib/otphp.php';
//date_default_timezone_set('America/Sao_Paulo');
$totp = new \OTPHP\TOTP("100");
echo $totp->now();
if ($totp->verify($_POST['verify'])){
	 echo " true";
}
else{
	 echo " false";
}
?>
