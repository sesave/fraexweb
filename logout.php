<?php
session_start();
include('login.php');
$token = $_GET['token'];
//    if(isset($_GET['token']) && $_GET['token']===$token){
    if(isset($token) && password_verify(session_id(), $token)){
    	session_destroy();
    ?>
    <script>alert("Logout feito com sucesso");location.href='index.php';</script> 
    <?php
		die();
    }
?>

   
