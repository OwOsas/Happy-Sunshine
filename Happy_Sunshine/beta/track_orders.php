<?php
include_once __DIR__ . "/config.php";
session_start();
?>

<?php $activePage = "track_orders.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Order | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/track-orders.css ">
</head>
<body>
    <?php
    include_once __DIR__ .'/components/header.php';
    ?>

    <div class="container">
        <div id="title">
            <a class="mobile" href="index.php"><img src="./img/icons/return_arrow_left.svg" alt="">Home</a>
            <h1>Tracking</h1>
        </div>

        
            <div class="tracking_card">
                <h2>Preparing</h2>
                <div class="break"></div>

                <div class="food_item">
                    <div class="img" style="background-image:url('./img/breakfast-sandwich.png');">
                </div>
                <div>
                    <h4>Breakfast Sandwich</h4>
                    <p>$5.00</p>
                </div>
            </div>

            <div class="food_item">
                <div class="img" style="background-image:url('./img/breakfast-sandwich.png');">
                </div>
                <div>
                    <h4>Breakfast Sandwich</h4>
                    <p>$5.00</p>
                </div>
            </div>

            <div class="break"></div>
                <h3>
                    Total: $10.00
                </h3>
            </div>

            <div class="location">
                <div class="find_us">
                    <div>
                        <img src="./img/icons/truck.svg" alt="">
                        <div>
                            <h3>Find us at:</h3>
                            <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                            33rd and Arch Street
                            <br> Philadelphia, PA 19104
                            </a>
                            <p>6am to 2:30pm</p>
                            <b>We are a cash only truck!</b>
                            <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                            View in Google Maps<img src="./img/icons/link_arrow_right.svg" alt="">
                            </a>
                        </div>
                    </div> 
                </div>
                <div id="map"></div>
            </div>
        </div>
    

    <!--The div element for the map -->


    

    <?php
        include_once __DIR__ . '/components/footer.php';
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
