<?php

session_start();

include 'css.php';

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

                <h5 align="right">Verificação 2FA</h5>

						<!-- script qrcode -->
                        <script src="js/jquery.min.js"></script>
                        <script src="js/jquery.qrcode.min.js"></script>                        
                        <div align="center" id="qrcodeTable"><p class="m1-txt1 p-b-10 lol"><span class="m1-txt2">FRAEX</span> :: App Checker</p><li>1ª: Escaneie o código QR-Code</li>
                        <?php include 'js/skqrcode.php'; ?>
                        <br><h2>⬇</h2><br>
                <li>2ª: Digite o token gerado</li>
                <form class="contact100-form validate-form" action="totp_verify.php" method="post" name="checktoken" id="checktoken">
				<div class="wrap-input100 m-b-10 validate-input" data-validate = "Token is required">
				<input class="s2-txt1 placeholder0 input100" type="text" name="verify" id="verify" placeholder="000000">
				<span class="focus-input100"></span>
				</div>
				<!--<button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04" type="submit" form="checktoken" value="Submit">Verificar</button>-->
				</form>
				</div>
				<br><br>
                <li><a href="" target="_blank">Download the latest<br>App Fraex Checker</a></li>

                </div>

                </main><!-- /.container -->

                </div>								

		</div><!-- /.container -->

</body>

</html>
