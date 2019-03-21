    <script>
        const myBtn = document.getElementById('btn1');
        myBtn.addEventListener('click', function(event) {
            <?php if(isset($_SESSION['email'])){?>
                let currency = document.getElementById("firstBox").value;
                let crypto = document.getElementById("secondBox").value;
                let symbol = '<?php echo $_SESSION['symbol']?>';
                document.getElementById("cryInput").value = crypto;
                document.getElementById("realInput").value = currency;
                document.getElementById("cryptolabel").innerHTML = symbol + ":";
                if(crypto == "" && currency == ""){
                     alert('Empty fields, please fill the currency input');
                    let delayInMilliseconds = 0500;
                    setTimeout(function() {
                        location.reload();
                    }, delayInMilliseconds);
                }else{
                    $("#myModal").modal();
                }
            <?php }else{ ?>
                alert("You need to be logged in to place an order");
                setTimeout(function() {
                    location.href('login.php');
                }, delayInMilliseconds);
            <?php } ?>
        });
    </script>
    

