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

                <h1>Dúvidas Frequentes</h1>

                <hr>

                <h4>Como você compra?</h4>

                <br/>

                <p>

                <ul>

                <li> <a href="signup.php" target="_blank"> Registre uma conta </a> </li>

                <li> <a href="index.php" target="_blank"> Crie um pedido </a> </li>

                <li> <a href="http://fraex.com/v4/signup.php" target="_blank"> Faça seu pedido: </a> </li>
                <li> Você precisa criar uma conta antes de fazer uma compra e depois fazer login para fazer seu pedido </li>

                </ul> </p>

                <br/>

                <h4>Qual moeda nós aceitamos?</h4>

                <br/>

                <p>

                <ul>

                <li>Real Brasileiro</li>

                <li>Na verdade, estamos pensando em aceitar mais moedas do que o real brasileiro, na verdade estamos em uma fase beta</li>

                </ul></p>

                <br/>

                <h4>Quais moedas você pode comprar?</h4>

                <br/>

                <p>

                <ul>

                <li>Bitcoin</li>

                <li>Ethereum</li>

                <li>Litecoin</li>

                <li>Cardano</li>

                </ul></p>

                <br/>

                <h4>Quais documentos eu preciso para fazer um pedido?</h4>

                <br/>

                <p>

                <ul>

                <li>CPF para cidadãos brasileiros</li>

                <li>Um passaporte válido para estrangeiros</li>

                </ul></p>

                <br/>

                <h4>O que é autenticação de 2 fatores (ou 2FA)?</h4>

                <br/>

                <p>

                Permitimos que você potencialize o 2FA para você ao apresentar um aplicativo autenticador (por exemplo, <a href = "https://support.google.com/accounts/answer/1066447?co=GENIE.Platform%3DAndroid&hl=pt_BR" target = "_ blank"> Google Authenticator </a>) no seu smartphone.

                O aplicativo autenticador produzirá outro código de 6 dígitos, como um relógio, sempre que você fizer o login, deverá digitar esse código.

                Isso constrói enormemente a segurança do seu registro, desde que seu e-mail seja invadido, ou sua chave secreta esteja em perigo; o programador, em qualquer caso, não terá a capacidade de entrar em seu registro, pois também exige o código do seu telefone.

                </p>

                </div>

                </main><!-- /.container -->

                </div>								

		</div><!-- /.container -->

</body>

</html>
