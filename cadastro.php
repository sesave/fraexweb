<?php 
session_start();
include_once("conexao.php");
$username = $_POST['username'];
$passwrd = $_POST["password"];
$cpass = $_POST['cpassword'];
$email = $_POST['email'];
$name = $_POST['name'];
$userid = $_POST['userid'];

/*sql injection*/
$email = mysqli_real_escape_string($conexao, $email);

/* sessão para o email*/
$_SESSION['email'] = $_POST['email'];

// rotinas para devkey
$devkey = password_hash("#%1" . $userid . "2$#",PASSWORD_BCRYPT,['cost' => 7,]);

if ($passwrd == $cpass) {
   $passwrd = password_hash($passwrd,PASSWORD_DEFAULT);
   $result_usuario="INSERT INTO user_tb_register(res_st_username,res_st_passwrd,res_st_name,res_st_email,res_st_userid,res_dt_date,res_st_devkey) values ('$username','$passwrd','$name','$email','$userid',NOW(),'$devkey')";
    $resultado= mysqli_query($conexao,$result_usuario);

    if (!mysqli_query($conexao,$resultado))
    {?>
      <script>alert("Cadastrado realizado com sucesso!"); location.href="device_register.php"</script>
    <?php }else{?>
          <script>alert("Algo deu errado. O cadastro não foi realizado. Verifique seus dados");history.back();</script>
    <?php 
    }
    /*if(mysqli_insert_id($conexao)){
        header("Location: index.php");
    }else{?>
          <script>alert("Something went wrong. User Registration failed."); history.back();</script>
    <?php 
    }*/
}else{
?>
    <script>alert("Suas senhas não batem. Verique seus dados"); history.back();</script>
<?php
    
}?>
