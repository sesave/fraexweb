<?php

session_start();

date_default_timezone_set('America/Sao_Paulo');

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

                <h1>FAQ</h1>

                <hr>

                <h4>How do you trade/buy?</h4>

                <br/>

                <p>

                <ul>

                <li><a href="signup.php" target="_blank">Register an account</a></li>

                <li><a href="index.php" target="_blank">Create an order</a></li>

                <li><a href="http://fraex.com/v4/signup.php" target="_blank">Checkout your order:</a></li>
                <li>You have to create an account before placing a buy and then be logged in to placing your order</li>

                </ul></p>

                <br/>

                <h4>What currency do we accept?</h4>

                <br/>

                <p>

                <ul>

                <li>Brazilian Real</li>

                <li>Actually we're thinking to accept more currencies than brazilian, actually we're on a beta phase</li>

                </ul></p>

                <br/>

                <h4>What coins you can trade/buy?</h4>

                <br/>

                <p>

                <ul>

                <li>Bitcoin</li>

                <li>Ethereum</li>

                <li>Litecoin</li>

                <li>Cardano</li>

                </ul></p>

                <br/>

                <h4>What documents do I need to make an order?</h4>

                <br/>

                <p>

                <ul>

                <li>CPF for brazilian citizens</li>

                <li>A valid passport for foreigners</li>

                </ul></p>

                <br/>

                <h4>What is 2Factor Authentication (or 2FA)?</h4>

                <br/>

                <p>

                    We enable you to empower 2FA for you by introducing an authenticator application, (for example, <a href="https://support.google.com/accounts/answer/1066447?co=GENIE.Platform%3DAndroid&hl=en" target="_blank">Google Authenticator</a>) on your smartphone. 

                    The authenticator application will produce another 6 digit code like clockwork, each time you login you should enter this code. 

                    This enormously builds the security of your record provided that your email is hacked into, or your secret key is imperiled, the programmer will in any case not have the capacity to get into your record since they require the code from your telephone as well. 

                </p>

                </div>

                </main><!-- /.container -->

                </div>								

		</div><!-- /.container -->

<?php include 'scripts.php'?>

</body>

</html>
