<?php
include_once __DIR__ . "/config.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tracking Order | Happy Sunshine</title>
        <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
        <link rel="stylesheet" href="./css/track-order.css">
    </head>

    <body>
        <?php
    include_once __DIR__ .'/components/header.php';
    ?>

            <div class="banner desktop">

            </div>

            <div class="fst">
                <div class="float-container">
                    <div id="start_here">
                        <div class="float-child1">

                            <h2 class="text-center">Track Order</h2>
                            <br>
                            <div class="order_tracking">
                                <div class="order_no">
                                    <h2>Preparing... </h2>
                                    <a href="./track_orders.php">
                                        Order #
                                        <!-- PHP -->
                                        5430
                                    </a>
                                </div>
                                <div class="status_tracker">
                                    <div id="order_placed" class="d-flex justify-between">
                                        <div class="d-flex">
                                            <img src="./img/burger.png" alt="" width="100">
                                            <p>Breakfast Sanwich</p>
                                        </div>
                                        <div class="tien">
                                            <p>--$5.00</p>
                                        </div>
                                    </div>
                                    <!-- <div class="dash"></div> -->
                                    <div id="order_placed" class="d-flex justify-between">
                                        <div class="d-flex">
                                            <img src="./img/burger.png" alt="" width="100">
                                            <p>Breakfast Sanwich</p>
                                        </div>
                                        <div class="tien">
                                            <p>--$5.00</p>
                                        </div>
                                    </div>

                                    <div class="total">

                                        <h3>Total: $69 Cash Only</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-child2">
                            <!-- <img src="./img/icons/truck.svg" alt=""> -->
                            <div>
                                <h3>Pick up location:</h3>
                                <br>
                                <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                                    33rd and Arch Street,<br> Philadelphia, PA 19104
                                </a>
                            </div>
                            <br>
                            <img class="find_us-img" src="./img/map.png" alt="" width="80%" height="80%">
                        </div>
                    </div>

                    <!--The div element for the map -->
                    <div id="map"></div>



                </div>
            </div>

            <link rel="stylesheet" href="./css/menu.css">
            <?php
        include_once __DIR__ .'/menu_gen.php';
        ?>

                <div class="footer" style="height: 500px; width: 100%;">

                </div>
                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=&v=weekly&channel=2" async></script>
                <script src="./js/index.js"></script>
                <script src="./js/g_map.js"></script>
                <script src="./js/header.js"></script>
    </body>

    </html>
