<?php 
include('conexao.php');
session_start();
$login=$_POST['email'];
$senha=$_POST['password'];
$resultf=mysqli_fetch_array(mysqli_query($conexao, "select * from user_tb_register where res_st_email='$login' limit 1"));
//if(strcmp($senha, $resultado['res_st_username'])){
if(password_verify($senha, $resultf['res_st_passwrd'])){
    $token=password_hash(session_id(), PASSWORD_DEFAULT);
    $_SESSION['email']=$resultf['res_st_email'];
    $_SESSION['id']=$resultf['res_in_id'];
    header("Location: index.php?token=$token");
}else{
?>
    <script>alert('Senha inválida!');location.href = 'login.php';</script>
<?php
}
?>
