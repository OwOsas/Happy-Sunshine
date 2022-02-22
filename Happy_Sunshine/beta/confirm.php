<?php
include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
include_once __DIR__ . "/include/dbh_inc.php";
session_start();
var_dump($_SESSION["cart_items"]);
?>

<?php $activePage = "confirm.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirm Order | Happy Sunshine</title>
        <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/confirm.css">
    </head>

    <body>
        <?php
        include_once __DIR__ .'/components/header.php';
    ?>

    <div id="confirmation_container">
        <a class="mobile" href="cart.php"><img src="./img/icons/return_arrow_left.svg" alt="menu"> Cart</a>
        <h1>Confirm Order</h1>
    </div>

    <form action="receipt.php">
        <div id="cart_info">
            <h2>My Cart</h2>
            <div class="item_info">
                <img src="./img/burger.png" alt="Cart Item Photo">
                <div>
                    <p class="item_name">Breakfast Sandwich</p>
                    <p class="item_content">Bagel, Bacon, Egg, Cheese, Ketchup, Salt, Pepper</p>
                    <p class="item_price">Price: $5.00</p>
                </div>
            </div>
        </div>
        <div id="order_info">
            <h2>Order Info</h2>
            <div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="input_field" value="John Smith">
                </div>
                <div>
                    <label for="phone_number">Phone Number</label>
                    <input type="tel" id="phone_number" name="phone_number" class="input_field"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    value="111-111-1111">
                </div>
            </div>
        </div>
        <div id="pick_up_time">
            <h2>Pick-up Time</h2>
            <div id="time_selection">
                <div>
                    <input class="button_input" type="radio" name="pick_up_time" value="ASAP" checked>
                    <label class="button_label" for="ASAP">ASAP</label>
                </div>
                <div>
                    <input class="button_input" type="radio" name="pick_up_time" value="">
                    <label class="button_label" for="pick_up_time">Select pickup time</label>
                </div>
            </div>
        </div> 
        <div id="confirm_order">
            <p id="total"><b>Total: $5.00</b> (Cash only)</p>
            <input type="submit" value="Place Order" class="btn form_btn" id="place_order_btn">
        </div>
    </form>

    <?php
        include_once __DIR__ .'/components/footer.php';
    ?>

                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

                <script src="./js/index.js"></script>
                <script src="./js/header.js"></script>
                <script src="./js/button.js"></script>
    </body>

    </html>
