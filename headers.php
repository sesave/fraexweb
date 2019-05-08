<?php
error_reporting(0);
include('main.php');
if(!isset(!password_verify(session_id(), $_GET['token'])){
  session_destroy();
  header("Location: index.php"); exit;
}
?>
