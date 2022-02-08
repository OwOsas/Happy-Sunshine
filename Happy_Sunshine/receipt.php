<?php
include_once __DIR__ . "/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/receipt.css">
</head>
<body>
    <?php
    include_once __DIR__ .'/components/header.php';
    ?>

    <div class="container">
        <div class="order_item">
                <div id="title">
                    <a class="mobile" href="../Happy_Sunshine/"><img src="./img/icons/return_arrow_left.svg" alt="">Home</a>
                    <h1>Recipe</h1>
                </div>
                <p>
                    Thank you for order! <br> <b>Show this receipt when picking up your order at </b> <br> <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">33rd and Arch St.</a>
                </p>
                <div class="cart_item_card">
                <div class="item">
                    <div class="img" style="background-image:url('./img/banner_img.png');"></div>
                    <div class="item_description">
                        <h3>Breakfast Sandwich</h3>
                        <p>Bagel, Bacon, Egg, Cheese, Ketchup, Salt, Pepper</p>
                    </div>
                </div>
                <div class="price">$5.00</div>
            </div>
        </div>

        <div class="order_info">
                <ul>
                    <li>Order number: <b>#0001</b></li>
                    <li>Name: <b>John Smith</b>  </li>
                    <li>Estimated pick-up time: <b>1:15pm</b></li>
                    <li>Total: <b>$5.00</b></li>
                </ul>
                    
                <a href="./track_orders.php" class="btn hidden" id="start_order">
                    Track Order
                </a>
            </div>
    </div>

    

    <?php
    include_once __DIR__ .'/components/footer.php';
    ?>

</div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=&v=weekly&channel=2"
      async
    ></script>
    <script src="./js/index.js"></script>
    <script src="./js/g_map.js"></script>
    <script src="./js/header.js"></script>
</body>
</html>
