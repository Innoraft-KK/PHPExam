<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cart</title>
</head>
<body>
    <section class="container">
        <h2>Shopping Cart</h2>
            <div class='flexme'>
                <form  action="../controller/cartTotal.php" method='post'>
                    <div class="flexme">
                        <div class="list">
                            <h3>Healthy Snack</h3>
                            <ul>
                                <?php
                                include '../controller/cart.php';
                                foreach($snacks as $snack){
                                    if( $snack["healthy"])
                                    { 
                                        echo "<li class='flexme'><input type='checkbox' name='snack[]' value='".$snack["id"]."' id='".$snack["id"]."'><img src='".$snack["image"]."'><label for='".$snack["id"]."'><span>".$snack["name"]." $".$snack['value']."</span></label></li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="list">
                            <h3>UnHealthy Snack</h3>
                            <ul>
                            <?php
                                foreach($snacks as $snack){
                                    if(!$snack["healthy"])
                                    { echo "<li class='flexme'><input type='checkbox' name='snack[]' value='".$snack["id"]."' id='".$snack["id"]."'><div class='img'><img src='".$snack["image"]."'></div><label for='".$snack["id"]."'><span>".$snack["name"]." $".$snack['value']."</span></label></li>";}
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <input type="submit" value='Buy'>
                </form>
            </div>
    </section>
</body>
</html>