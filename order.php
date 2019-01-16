<?php
session_start();
//$id = $_SESSION['id'];
//include 'conexao.php';
if(isset($_SESSION['email']))
{?>
	<script>
	alert("Função indisponível temporariamente. Contate o administrador");
    location.href = "index.php";
    </script>
<?php
    /*if(isset($_POST['submitb'])){
        /*$sql = "insert into user_tb_order (res_in_id, coin_in_id, order_re_vlr) values ('$id', '1', '$pricef')";
        $result = mysqli_query($conexao,$sql);
        //header("Location: index.php");
        echo "<script>alert('$pricef');</script>";
	}*/
}
else{?>
	<script>
	alert("You need to be logged to place an order");
    location.href = "login.php";
    </script>
<?php }

?>
