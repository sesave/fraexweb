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

                <h5 align="right">Verificação 2FA<br>2ª Etapa</br></h5>
                     
                <div align="center" id="verify"><p class="m1-txt1 p-b-10 lol"><span class="m1-txt2">FRAEX</span> :: App Checker</p><li>Digite o token do App</li>                        
                <form class="contact100-form validate-form" action="totp_verify.php" method="post" id="checktoken">
				<div class="wrap-input100 m-b-10 validate-input" data-validate = "Token is required">
				<input class="s2-txt1 placeholder0 input100" type="text" name="verify" placeholder="000000">
				<span class="focus-input100"></span>
				</div>
				<button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04" type="submit" form="checktoken" value="Submit">Verificar</button>
				</form>
				</div>
				<br><br>
                <li><a href="" target="_blank">Baixe a última versão de<br>App Fraex Checker</a></li>

                </div>

                </main><!-- /.container -->

                </div>								

		</div><!-- /.container -->

</body>

</html>
