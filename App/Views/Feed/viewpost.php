<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link rel="stylesheet" href="/css/style.css">
  <!-- <link rel="stylesheet" href="/css/feed.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <section class="container">
        <h2>Shopping Cart</h2>
            <div class='flexme'>
                <form  action="/Item/total" method='post'>
                    <div class="flexme">
                        <div class="list">
                            <h3>Healthy Snack</h3>
                            <ul>
                                <?php
                                foreach($row as $rows){
                                    if( $rows["healthy"])
                                    { 
                                        echo "<li class='flexme'><input type='checkbox' name='snack[]' value='".$rows["id"]."' id='".$rows["id"]."'><img src='/image/HealthyImg".$rows["image"]."'><label for='".$rows["id"]."'><span>".$rows["name"]." $".$rows['value']."</span></label></li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="list">
                            <h3>UnHealthy Snack</h3>
                            <ul>
                            <?php
                                foreach($row as $rows){
                                    if(!$rows["healthy"])
                                    { echo "<li class='flexme'><input type='checkbox' name='snack[]' value='".$rows["id"]."' id='".$rows["id"]."'><div class='img'><img src='".$rows["image"]."'></div><label for='".$rows["id"]."'><span>".$rows["name"]." $".$rows['value']."</span></label></li>";}
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