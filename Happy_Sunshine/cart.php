<?php
include_once __DIR__ . "/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your cart | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/cart.css">
</head>
<body>
    <?php
    include_once __DIR__ .'/components/header.php';
    ?>


    
    <div class="fst">
        <div id="title">
            <a class="mobile" href="../Happy_Sunshine/"><img src="./img/icons/return_arrow_left.svg" alt="">Home</a>
            <h1>My Cart</h1>
        </div>
                    <!-- Cart Item Card -->
        <div class="cart_item_card">
            <div class="item">
                <div class="img" style="background-image:url('./img/banner_img.png');"></div>
                <div class="item_description">
                    <h3>Breakfast Sandwich</h3>
                    <p>Bagel, Bacon, Egg, Cheese, Ketchup, Salt, Pepper</p>
                </div>
            </div>
            <div class="price">$5.00</div>
            <div class="item_mod">
                <a href="">Edit</a>
                <a href="">Remove</a>
                <div class="quantity">
                    <div class="subtract"></div>
                    <p>1</p>
                    <div class="add"></div>
                </div>
            </div>
        </div>
<!-- _____________________________________________ -->
        <div id="cart_empty">
            <img src="./img//icons/cart_empty_crying_bird.svg" alt="" width="50%" height="50%">
            <h2>My cart is empty!</h2>
        </div>

        
        <a href="./menu.php" class="btn" id="start_order">
            Order Now
            <img src="./img/icons/arrow_right.svg" alt="">
        </a>
    </div>

    <?php
    include_once __DIR__ .'/components/footer.php';
    ?>

</div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="./js/index.js"></script>
    <script src="./js/g_map.js"></script>
    <script src="./js/header.js"></script>
</body>
</html>
