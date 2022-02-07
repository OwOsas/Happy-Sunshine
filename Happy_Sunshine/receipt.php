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

    <div class="banner desktop">
        
    </div>
    
    <div class="fst">
        <h2>Receipt</h2>
        <p>Thank you for your order</p>
        <p>Show this receipt when picking up your order at</p>
        <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
            33rd and Arch Street,<br> Philadelphia, PA 19104
        </a>
        <div class="float-container">
            <div class="float-child">
            <div class="order">
                <h3>Breakfast Sandwich</h3>
                <p>Bagel, Bacon, Egg, Cheese, Ketchup, Salt, Pepper</p>
                <p>Price: <b>$5.00</b></p>
            </div>
            </div>
        </div>
            <div class="float-child">
            <div class="main_container">
                <h3>Name:</h3>
                <h3>Phone Number:</h3>
                <h3>Pick-up Time:</h3>
                <h3>Total: $5.00 Cash Only</h3>
            </div>
            </div>
        <a href="./track.php" class="btn" id="track_order">
            Track Order
        </a>

        <!-- <div> -->
            <a href="" class="btn" id="recent">
               Print Receipt
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
