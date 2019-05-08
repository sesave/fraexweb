<?php 
session_start();
include_once("conexao.php");
$username = $_POST['username'];
$passwrd = $_POST["password"];
$cpass = $_POST['cpassword'];
$email = $_POST['email'];
$name = $_POST['name'];
$userid = $_POST['userid'];
//$devkey = $_POST['devkey'];

/*sql injection*/
$email = mysqli_real_escape_string($conexao, $email);

/* sessão para o email*/
$_SESSION['email'] = $email;

if ($passwrd == $cpass) {
   $passwrd = password_hash($passwrd,PASSWORD_DEFAULT);
   $result_usuario="INSERT INTO user_tb_register(res_st_username,res_st_passwrd,res_st_name,res_st_email,res_st_userid,res_dt_date) values ('$username','$passwrd','$name','$email','$userid',NOW())";
    $resultado = mysqli_query($conexao,$result_usuario);

    if(mysqli_insert_id($conexao)){
        header("Location: device_register.php");
    }else{?>
          <script>alert("Something went wrong. User Registration failed."); history.back();</script>
    <?php 
    }
}else{
?>
    <script>alert("Your password and confirmation password do not match."); history.back();</script>
<?php

/* rotinas para devkey*/
$resultf=mysqli_fetch_array(mysqli_query($conexao, "select * from user_tb_register where res_st_email='$email' limit 1"));
$_SESSION['id']=$resultf['res_in_id'];
$devkey = password_hash("#%" . $email . $_SESSION['id'] . "$#",PASSWORD_BCRYPT,['cost' => 7,]);
mysqli_query($conexao,"update user_tb_register set res_st_devkey = '$devkey' where res_st_email='$email' limit 1");
//$_SESSION['devkey'] = $devkey;
}?>
