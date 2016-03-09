<?php
    
    session_start();
    $_SESSION['Payment_Amount'] = 1.00;
    $_SESSION['Checkout_Type'] = 1;
    include 'mysql.php';
    include 'header.php';
?>

  <body>
      <h1>Donate to help fund Kat & Alec's Tahoe Wedding</h1>
      
      <div class="container-fluid">
          <h3>Thank you for your support!</h3>
        <div class="row">
          <div class="col-md-5"> 
            <div class="well well-lg">
                <form id="b1" action='expresscheckout.php' METHOD='POST'>
                    <input type="number" placeholder="Amount" name="Payment_Amount" min="1" required>
                    <br>
                    <input type="checkbox" name="anon" value="yes"> 
                    Make my gift anonymous.
                    </input>
                    <br>
                </form>
                <h2>Thank you to the following donors:</h2>
                <?php displayDonations(); ?>
            </div>
        </div>
      </div>
      <img src="img/katandalec.jpg" class="img-responsive">
  </div>
      <script>
              window.paypalCheckoutReady = function () {
                paypal.checkout.setup("RJ7UGR5RQE5U", {
                locale: 'en_US',
                environment: 'production',
                container: 'b1'
                    });
                };
        </script>
        <script src="http://www.paypalobjects.com/api/checkout.js" async></script>

          <?php include 'footer.php'; ?>
  

</body>
</html>