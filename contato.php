<?php

session_start();

date_default_timezone_set('America/Sao_Paulo');

include 'css.php';
include 'scripts.php';


?>

        <body>

        <div class="logoMargin container">

            <img src="images/icons/logo.png" alt="LOGO">

            <div class="row">

                <div class="margin4 col-md-8">

                <form name="contactform" action="send_form_email.php" method="post" id="contactform">

                    <div class="form-group">

                        <label for="first_name">Nome *</label>

                        <input class="form-control"  type="text" name="first_name" maxlength="50" size="30" required>

                    </div>

                    <div class="form-group">

                        <label for="last_name">Sobrenome *</label>

                        <input class="form-control"  type="text" name="last_name" maxlength="50" size="30" required>

                    </div>

                    <div class="form-group">

                        <label for="email">E-mail *</label>

                        <input class="form-control"  type="text" name="email" maxlength="80" size="30" required>

                    </div>

                    <div class="form-group">

                        <label for="telephone">Número de Telefone/Celular</label>

                        <input class="form-control"  type="text" name="telephone" maxlength="30" size="30">

                    </div>

                    <div class="form-group">

                        <label for="comments">Comentários *</label>

                        <textarea class="form-control" rows="5" name="comments" required></textarea>

                    </div>

                    <div class="form-group">

                       <button class="btn btn-primary" type="submit" id="contactform" value="Submit">

							Envie seu contato

					</button>

                    </div>

                </form>

            </div>

            </div>

<? include 'scripts.php'?>

</body>

</html>