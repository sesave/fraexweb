<?php
 date_default_timezone_set('America/Sao_Paulo');
 $path = 'subs01.txt';
 if (isset($_POST['name']) && isset($_POST['email'])) {
    $fh = fopen($path,"a+");
    $string = date("Y-m-d H:i:s").' : '.$_POST['name'].' - '.$_POST['email'].PHP_EOL;
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
?>