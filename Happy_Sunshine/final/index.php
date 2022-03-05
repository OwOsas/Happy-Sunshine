<?php
session_start();
include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
include_once __DIR__ . "/include/dbh_inc.php";
?>

<?php $activePage = "index.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/menu.css">
</head>
<body>
    <?php
    include_once __DIR__ .'/components/header.php';
    ?>

    <div class="banner desktop">
        
    </div>
    
    <div class="fst">
        <h2>Breakfast Sandwich</h2>
        <p>Our classic breakfast staple with your choice of protein + extras</p>
        
        <div id="start_here">

            <div class="btn_container">
                <h1>Hi, John!</h1>
                <a href="./menu.php" class="btn" id="start_order">
                    Start Order 
                    <img src="./img/icons/arrow_right.svg" alt="">
                </a>

                <!-- <div> -->
                    <a href="./recent_orders.php" class="btn" id="recent">
                        Recent Orders
                    </a>
                    <!-- <div class="btn" id="favorites">
                        Favorites
                        <img src="" alt="">
                    </div> -->
                <!-- </div> -->
            </div>

            <div class="order_tracking">
                <div class="order_no">
                    <h2><b>Pick Up Time: </b> <br> 
                        <!-- PHP -->
                        9:30 am 
                    </h2>
                    <a href="./track_orders.php">
                        Order #
                        <!-- PHP -->
                        42
                    </a>
                </div>
                <div class="status_tracker">
                    <div id="order_placed">
                        <p>Order Placed</p>
                        <img src="./img/icons/order_tracking_active.svg" alt="">
                    </div>
                    <div class="dash"></div>
                    <div id="order_placed">
                        <p>Order Preparing</p>
                        <img src="./img/icons/order_tracking_active.svg" alt="">
                    </div>
                    <div class="dash"></div>
                    <div id="order_placed">
                        <p>Order Ready</p>
                        <img src="./img/icons/order_tracking_active.svg" alt="">
                    </div>
                </div>
                
                <a href="./receipt.php">View Receipt <img src="./img/icons/link_arrow_right.svg" alt=""></a>
            </div>

            <div class="location">
                <div class="find_us">
                    <div>
                        <img src="./img/icons/truck.svg" alt="">
                        <div>
                            <h3>Find us at:</h3>
                            <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                                33rd and Arch Street,<br> Philadelphia, PA 19104
                            </a>
                            <p>6am to 2:30pm</p>
                            <b>We are a cash only truck!</b>
                            <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                                View in Google Maps <img src="./img/icons/link_arrow_right.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <!--The div element for the map -->
                <div id="map"></div>
            </div>



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