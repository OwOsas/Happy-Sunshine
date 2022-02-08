<?php
include_once __DIR__ . "/config.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirm Order | Happy Sunshine</title>
        <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
        <link rel="stylesheet" href="./css/confirm.css">
    </head>

    <body>
        <?php
        include_once __DIR__ .'/components/header.php';
    ?>

            <div class="banner desktop">

            </div>

            <div class="float-container">
                <h2 class="cart1">My Cart</h2>
                <div class="float-child">
                    <div class="left">
                        <img class="burger" src="./img/burger.png" alt="" width="60%" height="60%">
                    </div>
                    <div class="right">

                        <h2 class="cart2">My Cart</h2>
                        <h3><b>Breakfast Sandwich</b></h3>
                        <p>Bagel, Bacon, Egg, Cheese, Ketchup, Salt, Pepper</p>
                        <p>Price: <b>$5.00</b></p>
                        <h3><b>Total: $5.00</b> Cash Only</h3>
                    </div>
                </div>
                <div class="float-child">
                    <h2>Order Info</h2>
                    <div class="input_field_container">
                        <form action="#">
                            <div class="row">
                                <div class="column">
                                    <label for="login_name">Name</label>
                                    <input type="text" id="login_name" name="login_name" class="input_field">
                                </div>
                                <div class="column">
                                    <label for="phonenumber">Phone Number</label>
                                    <input type="phonenumber" id="phonenumber" name="phonenumber" class="input_field">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pick up time">
                        <br>
                        <h3><b>Pick-up Time</b></h3>
                        <!--Selection box here-->
                        <img class="pickUp" src="./img/selection.png" alt="" width="60%" height="60%">
                    </div>
                    <div class="find_us">
                        <div>
                            <img src="./img/icons/truck.svg" alt="">
                            <div>
                                <h3><b>Find us at:</b></h3>
                                <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                                33rd and Arch Street,<br> Philadelphia, PA 19104
                            </a>
                                <!--<a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                                View in Google Maps <img src="./img/icons/link_arrow_right.svg" alt="">
                            </a>-->
                            </div>
                            <img class="find_us-img" src="./img/map.png" alt="" width="60%" height="60%">
                        </div>

                    </div>

                </div>
            </div>

            <div id="start_here">
                <a href="./receipt.php" class="btn" id="start_order">
            Place Order
            <img src="./img/icons/arrow_right.svg" alt="">
        </a>

            </div>




            <?php
        include_once __DIR__ .'/components/footer.php';
    ?>

                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

                <script src="./js/index.js"></script>
                <script src="./js/header.js"></script>
    </body>

    </html>
