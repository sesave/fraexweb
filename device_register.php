<?php
session_start();
//$user = $_REQUEST['u'];
include('css.php');
if(isset($_SESSION['email'])){
	$login = $_SESSION['email'];
	include('conexao.php');
	$resultf=mysqli_fetch_array(mysqli_query($conexao,"select res_st_devkey from user_tb_register where res_st_email='$login' limit 1"));
	$devkey=$resultf['res_st_devkey'];
}
else{
	$devkey = "Necessário estar logado!";
	echo "<script>alert('$devkey');</script>";
}
?>

<html>
<style>

    marketing .col-lg-4 {

    margin-bottom: 1.5rem;

    text-align: center;

    }

    .container {
		
    max-width: 50%;
    
    }
    
    .center{

     text-align: center;   

    }

    .jumbotron {

    padding: 0px;

    opacity: 0.90;

    padding-bottom: 10px;

    }

</style>

<body>

        <div class="logoMargin container marketing">

        <img src="images/icons/logo.png" alt="LOGO">

        <!-- Three columns of text below the carousel -->

        <div class="row jumbotron margin4">

                <main role="main" class="container">


                <!--<h5 align="right">Verificação 2FA<br>1ª Etapa</br></h5>-->

						<!-- script qrcode -->
                        <script src="js/jquery.min.js"></script>
                        <script src="js/jquery.qrcode.min.js"></script>                        
                        <div align="center" id="qrcodeTable">
						<br><br>
						<p class="m1-txt1 p-b-10 lol"><span class="m1-txt2">FRAEX</span> :: App Checker</p><br><img src="images/device.png" height="100%" width="100%"><br><br><li>Para registrar o dispositivo, escaneie<br>o código QR-Code no aplicativo<br><h2>⬇</h2></li><br></div>
						<div id="qrcode"><?php include 'js/suqrcode.php'; ?></div>
				<br><br>
				<form class="contact100-form validate-form" action="index.php" method="post" id="checktoken">
				<span class="focus-input100"></span>
				</div>
				<button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04" type="submit" form="checktoken" value="Submit">OK</button>
				</form>
				<br><br>
				<div align="left"><a href="" target="_blank"><img src="images/icon.png" height="64px" width="64px"><br>Instale o mais recente<br>FRAEX :: App Checker</a></div>
				<br>
                </main><!-- /.container -->

                </div>								

		</div><!-- /.container -->

</body>

</html>
