<?php 
error_reporting(E_ALL ^ E_NOTICE);
session_start();
// a sessão precisa ser iniciada a cada página diferente
/*if(!isset($_SESSION)) session_start();
// verifica se há variáveis da sessão que identifica um usuário
$token=$_GET['token'];
if(!isset($_SESSION['email']) || !isset($_SESSION['nome']) || !password_verify(session_id(), $token)){
session_destroy();
}*/
include 'css.php';
//include 'scripts.php';

function usuarioLogado() {
	return $_SESSION["email"];
}
function usuarioEstaLogado() {
	return isset($_SESSION["email"]);
}
?>
<body>
    <div class="logoMargin container">
                <img src="images/icons/logo.png" alt="LOGO">
                <div class="row">
                    <div class="col-md-8 col-sm-4">
				    <p class="m1-txt1 p-b-36 lol">
					    <span class="m1-txt2">Login</span> :: Obtenha seus dados
				    </p>
				    </div>
                </div>
				<form class="contact100-form validate-form" action="logica-login.php" method="post" id="form1">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="E-mail" required>
					    <span class="focus-input100"></span>   
                    </div>
					<div class="form-group">
					    <input class="form-control" type="password" name="password" placeholder="Senha" required>
					    <span class="focus-input100"></span>
                    </div>
                    <p class="forgot" style="margin-bottom: 2%"><a href="#">Esqueceu sua senha?</a></p>
                    <button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-07" type="submit" form="form1" value="Submit">
							Login
					</button>
				</form>
		</div>
</body>
</html>
