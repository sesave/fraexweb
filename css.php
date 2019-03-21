<!DOCTYPE html>
<html lang="en">
<head>
	<title>FRAEX :: B2C Cryptocurrency</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <style>
    html, body{
    background-image: url('images/bg01.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 100% top;
    background-attachment: fixed;
    }
    @media only screen and (max-width : 960px) {
        html, body{
        background: url(images/bg01.jpg) no-repeat center center fixed;
        }
    }
        .input-coin {
    font-family: Lato-Bold;
    font-size: 17px;
    position: relative;
    }
    .input-coin.left input {
    padding-left:48px;
    }
    .input-coin.right input {
    padding-right:18px;
    text-align:end; 
    }
    .input-coin:before {
    position: absolute;
    top: 20%;
    }
    .input-coin.currency:before {
    content:"<?php if(isset($_POST['base'])){ echo $_POST['base'];} else { echo "----";} ?>";
    }
    .input-coin.crypto:before {
    content:"<?php if(isset($_POST['symbol'])){ $str=$_POST['symbol']; $nstr=str_replace(array("USDT"),"", $str); echo $nstr; } else { echo "----";} $_SESSION['symbol']=$nstr?>";
    }
    .input-coin.left:before {
    left: 5px;
    }
    .input-coin.right:before {
    right: 5px;
    }
    </style>
    <?php
        if(isset($_SESSION['email']))
    {
	    include 'menu2.html';
    }else{
	    include 'menu.html';
    }
?>
</head>
