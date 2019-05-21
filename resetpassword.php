<?php 
session_start();
include_once("conexao.php");
$id = $_SESSION["id"];
$passwrd = password_hash($_POST["newpassword"],PASSWORD_DEFAULT);
/*sql injection*/
$email = mysqli_real_escape_string($conexao, $passwrd);
$sql="update user_tb_register SET res_st_passwrd='{$passwrd}' where res_in_id='$id'";
$resultado= mysqli_query($conexao,$sql);
if($resultado){
?>
	<script>alert("Senha atualizada com sucesso!");location.href = "profile.php";</script>
<?php
}else{
	$lol=mysqli_error($conexao);
	echo $lol;
}

?>