<?php

session_start();

include 'css.php';

if(!isset($_SESSION['email'])){ 
	echo '<script>alert("Necessário estar logado!"); location.href = "index.php";</script>';
	}
	include('conexao.php');
	$id = $_SESSION['id'];
	$fresult=mysqli_fetch_array(mysqli_query($conexao,"select * from user_tb_order where res_in_id='$id' order by order_in_id desc limit 1"));
if($fresult['coin_in_id'] == 1){
	$csymbol = "BTC (Bitcoin)";
}else if($fresult['coin_in_id'] == 2){
	$csymbol = "ETH (Ethereum)";
}else if($fresult['coin_in_id'] == 3){
	$csymbol = "LTC (Litecoin)";
}else{
	$csymbol = "ADA (Cardano)";
}
?>

<style>

    marketing .col-lg-4 {

    margin-bottom: 1.5rem;

    text-align: center;

    }
    
    /*
    .container {
		
    max-width: 70%;
    
    }
    */
    
    .contact100-form {

     width: 110px;

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
<html>
<body>

<script>
window.onload=function() {
    document.getElementById('verify').oninput=function() {
        if (this.value.length >= 6) {
            document.getElementById('checktoken').submit();
        }
    };
};
</script>

        <div class="logoMargin container marketing">

        <img src="images/icons/logo.png" alt="LOGO">

        <!-- Three columns of text below the carousel -->

        <div class="row jumbotron margin4">

                <main role="main" class="container">

                <div class="col-lg">

                <br/>

                <h1>Checkout</h1>

                <hr>

                <h5 align="right">✓ Verificado</h5>

						<!-- script qrcode -->
                        <script src="js/jquery.min.js"></script>
                        <script src="js/jquery.qrcode.min.js"></script>                        
                        <div align="center" id="qrcodeTable"><p class="m1-txt1 p-b-10 lol"><span class="m1-txt2">Pedido</span> Recebido!</p><br>
                        <br><h3><?php echo $_SESSION['name']; ?>,</h3>
                        <br><br><h4>Em breve você receberá no e-mail<br><br><font color="green"><?php echo $_SESSION['email']; ?></font><br><br>Status do pedido de <b><?php echo $fresult['order_re_vlr'] . ' ' . $csymbol . '</b> no valor de <b>R$ ' . $fresult['order_re_price'] . '</b><br><br>Carteira de depósito:<br><b>' . $fresult['wallet_st_addr'] . '</b>'; ?><br><br>Obrigado!</h3><br><br>
                        </div>

                </main><!-- /.container -->

                </div>								

		</div><!-- /.container -->

</body>

</html>
