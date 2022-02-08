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
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/confirm.css">
    </head>

    <body>
        <?php
        include_once __DIR__ .'/components/header.php';
    ?>

    <div id="confirmation_container">
        <a class="mobile" href="../Happy_Sunshine/menu.php"><img src="./img/icons/return_arrow_left.svg" alt="menu"> Menu</a>
        <h1>Confirm Order</h1>
    </div>

    <form>
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
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="input_field">
            </div>
            <div>
                <label for="phone_number">Phone Number</label>
                <input type="phone_number" id="phone_number" name="phone_number" class="input_field">
            </div>
        </div>
        <div id="pick_up_time">
            <h2>Pick-up Time</h2>
            <div id="time_selection">
                <div>
                    <input type="radio" name="pick_up_time" value="ASAP" checked>
                    <label for="ASAP">ASAP</label>
                </div>
                <div>
                    <input type="radio" name="select_time" value="select_time">
                    <label for="select_time">Select pickup time</label>
                </div>
            </div>
        </div> 
        <div id="confirm_order">
            <p>Reminder: This is a cash only order</p>
            <input type="submit" value="Place Order" class="btn form_btn" id="place_order_btn">
        </div>
    </form>

    <?php
        include_once __DIR__ .'/components/footer.php';
    ?>

                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

                <script src="./js/index.js"></script>
                <script src="./js/header.js"></script>
    </body>

    </html>
