<!-- SCRIPTS JS -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


	<script >

		$('.js-tilt').tilt({

			scale: 1.1

		})

	</script>

	<script src="js/main.js"></script>



    <!-- script tawk.to -->

    <script src="js/tawkto.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- script modal windows checkout -->

    <script>

    // Function that when the user clicks the button, make the checkout

    function validatebtn() {

        <?php

            if(isset($_SESSION['email']))

            {?>

	            

	    <?php

            }else{?>

	            alert("You need to be logged to place an order");

	            location.href = "login.php";

        <?php    }?>
        </script>

    <!-- script menu -->

    <script>

    jQuery(document).ready(function() {

	jQuery('.toggle-nav').click(function(e) {

		jQuery(this).toggleClass('active');

		jQuery('.menu ul').toggleClass('active');



		e.preventDefault();

	});

    });

    </script>
