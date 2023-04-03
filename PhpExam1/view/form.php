
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Mynerve&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="profile.css" />
    <link rel="stylesheet" href="login_reg.css">
    <title>Checkout</title>
  </head>
  <body>
    <form action="../controller/Checkout.php" method="post">
      <h2>Checkout</h2>
        <div>
            <label for="Name">Name</label>
            <input
            type="text"
            id="Name"
            name="Name"
            />
        </div>
        <div>
            <label for="email">Email</label>
            <input
            type="email"
            id="email"
            name="email"
            />
        </div>
        <div>
            <label for="phone">Phone No.</label>
            <input
            type="text"
            id="phone"
            name="phone"
            />
        </div>
        <div>
            <label for="amount">Total Amount</label>
            <input
            type="text"
            id="amount"
            name="amount"
            <?php
            echo "value='".$_SESSION['total']."'";
            ?>
            disabled
            />
        </div>
      <input type="submit" value="Checkout">
    </form>
  </body>
</html>
