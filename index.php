<?php

if (!isset($_SESSION)){

session_start();

}

date_default_timezone_set('America/Sao_Paulo');

include 'banco-moedas.php';

include 'conexao.php';

$coins = listaCoins($conexao);

include 'css.php';

include 'scripts.php';
//Set useful variables for paypal form
$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_username = 'fraexcontact-facilitator@gmail.com'; //Business Email

?> 

	<div class="container">

        <div class="logoMargin row">

            <div class="col-md-4">

				<img src="images/icons/logo.png" alt="LOGO">

			</div>

		</div>

		<div class="camposMargin row"> <!-- linha dos campos -->

			<div class="col-md-6 margin6"> <!-- coluna da moeda fiat --> 

				<form name="autoSumForm" class="contact100-form validate-form" method="post" id="autoSumForm">

					<div class="wrap-input100 m-b-10 validate-input input-coin currency left" data-validate = "A value is required">

						<input class="s2-txt1 placeholder0 input100" type="text" name="firstBox" id="firstBox"  onKeyUp="startCalc();" placeholder="0.00">

						<span class="focus-input100"></span>

					</div>

					<div class="w-full">

                		<p class="s2-txt3 p-t-18">

		        			Select a currency (available soon):

				        </p>

						<select class="form-control" name="base">

                        <option value="USD" selected="USD">US Dollar</option>

                		</select>

					</div>

		        </div>

		<div class="col-md-6"> <!-- coluna da cryptomoeda -->

					<div class="wrap-input100 m-b-10 validate-input input-coin crypto left" data-validate = "A value is required">

						<input readonly class="s2-txt5 placeholder0 input100" type="text" name="secondBox" id="secondBox" placeholder="0.00000000">

						<span class="focus-input100"></span>

					</div>

						<p class="s2-txt3 p-t-18">
 
		        			Select a cryptocoin:  
 
				        </p>

                	    <select class="form-control" name="symbol" onchange="this.form.submit();">

                    	<option disabled selected="selected">Select</option>

                    	<?php foreach($coins as $coin) : ?>

                        <option value="<?=$coin['coin_st_apisymbol']?>"><?=$coin['coin_st_name']?></option>

                    	<?php endforeach ?>

                		</select>
        </form>   
        </div>        		        		
		</div>
		<div class="row"> <!-- linha do botão -->
            <!-- <form action="order.php" method="post"> -->
				<div class="col-md-4 margin5">
				<form action="order.php" method="post">
        		<input type='hidden' name='cancel_return' value='http://fraex.com/v4/?success=false'> <!-- URL de cancelamento -->
				<input type='hidden' name='return' value='http://fraex.com/v4/?success=true'> <!-- URL de sucesso -->
        		<input type="hidden" name="" value="submit"> <!-- value do botão quando clica -->
        		<button id="myBtn" onclick="validatebtn()" name="submit" class="btn btn-outline-success btn-lg btn-block">Place your order</button>
                <!--onclick="validatebtn()"-->
                </form>
        	</div>
        	<!--</form>-->
        </div>


		<div class="flex-w">

			<a href="#" class="flex-c-m size5 bg3 how1 trans-04 m-r-5">

				<i class="fab fa-facebook-f"></i>

			</a>



			<a href="#" class="flex-c-m size5 bg4 how1 trans-04 m-r-5">

				<i class="fab fa-twitter"></i>

			</a>



			<a href="#" class="flex-c-m size5 bg5 how1 trans-04 m-r-5">

				<i class="fab fa-youtube"></i>

			</a>

		</div>


	<script src="js/jquery.min.js"></script>

	<script src="js/jquery.maskMoney.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<?php require_once( "getprices.php" ); require_once( "getbase.php" ); ?>

	<script src="js/curr.orig.js"></script>

	<script src="js/main.js"></script>

	</div>  

</body>

</html>

