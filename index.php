<?php

if (!isset($_SESSION)){

session_start();

}
date_default_timezone_set('America/Sao_Paulo');
include 'banco-moedas.php';
include 'conexao.php';
$coins = listaCoins($conexao);
include 'css.php';
?> 

	<div class="container">

        <div class="logoMargin row">

            <div class="col-md-4">

				<img src="images/icons/logo.png" alt="LOGO">

			</div>

		</div>

		<div class="camposMargin row"> <!-- linha dos campos -->

			<div class="col-md-6 margin6"> <!-- coluna da moeda fiat --> 

				<form name="autoSumForm" class="contact100-form validate-form" id="autoSumForm" method="post">

					<div class="wrap-input100 m-b-10 validate-input input-coin currency left" data-validate = "A value is required">

						<input class="s2-txt1 placeholder0 input100" type="text" name="firstBox" id="firstBox"  onKeyUp="startCalc();" placeholder="0.00">

						<span class="focus-input100"></span>

					</div>

					<div class="w-full">

                		<p class="s2-txt3 p-t-18">

		        			Currency is already selected:

				        </p>

						<select class="form-control" name="base">

                        <option value="BRL" selected="BRL">Real Brasileiro</option>

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
							<option id='select' value="<?=$coin['coin_st_apisymbol']?>"><?=$coin['coin_st_name']?></option>
							<?php endforeach ?>
							</select>

        </form>   
        </div>        		        		
		</div>
		<div class="row"> <!-- linha do botão -->
				<div class="col-md-4 margin5">
					<button id='btn1' class="btn btn-outline-success btn-lg btn-block">Place your order</button>
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Fraex Checkout</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" class="x">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<form action="checkout.php" method='post'>
					<div class="form-group row">
						<label for="realInput" class="col-sm-2 col-form-label">R$: </label>
						<div class="col-sm-10">
						<input class="form-control" type="text" name="realInput" id="realInput" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="cryInput" id="cryptolabel" class="col-sm-2 col-form-label"> :</label>
						<div class="col-sm-10">
						<input class="form-control" type="text" name="cryInput" id="cryInput" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="walletInput" class="col-sm-2 col-form-label">Your wallet: </label>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="walletInput" id="walletInput" placeholder="Cryptocurrency Wallet" autofocus required>
						</div>
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-outline-primary">Confirm your checkout</button>
					</div>
					</form>
					</div>
				</div>
				</div>
        	<!--</form>-->
        </div>
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
	<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<?php require_once( "getprices.php" ); require_once( "getbase.php" ); require_once( "modal.php" );?>
	<script src="js/curr.orig.js"></script>
	<script src="js/jquery.maskMoney.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/tawkto.js"></script>
	</div> 

</body>

</html>
