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

    <div class="banner desktop">
        
    </div>
    
    <div class="fst">
        <h2>My cart</h2>
        <img src="./img/chicken.png" alt="" width="50%" height="50%">
        <h2>My cart is empty!</h2>
        
        <div id="start_here">
            <a href="./menu.php" class="btn" id="start_order">
                Order Now
                <img src="./img/icons/arrow_right.svg" alt="">
            </a>

        </div>
    </div>

        <link rel="stylesheet" href="./css/menu.css">
        <?php
        include_once __DIR__ .'/menu_gen.php';
        ?>

    <div class="footer" style="height: 500px; width: 100%;">

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
