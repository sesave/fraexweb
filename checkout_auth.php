<?php

session_start();

include 'css.php';

?>

<style>

    marketing .col-lg-4 {

    margin-bottom: 1.5rem;

    text-align: center;

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

        <div class="logoMargin container marketing">

        <img src="images/icons/logo.png" alt="LOGO">

        <!-- Three columns of text below the carousel -->

        <div class="row jumbotron margin4">

                <main role="main" class="container">

                <div class="col-lg">

                <br/>

                <h1>Checkout</h1>

                <hr>

                <h5 align="right">Verificação 2FA<br>1ª Etapa</br></h5>

						<!-- script qrcode -->
                        <script src="js/jquery.min.js"></script>
                        <script src="js/jquery.qrcode.min.js"></script>                        
                        <div align="center" id="qrcodeTable"><p class="m1-txt1 p-b-10 lol"><span class="m1-txt2">FRAEX</span> :: App Checker</p><li>Escaneie o código QR-Code</li></div>                        
                        <?php include 'js/skqrcode.php'; ?>
				<br><br>
                <li><a href="" target="_blank">Download the latest<br>App Fraex Checker</a></li>

                </div>

                </main><!-- /.container -->

                </div>								

		</div><!-- /.container -->

</body>

</html>
