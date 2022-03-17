<?php
include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
include_once __DIR__ . "/include/dbh_inc.php";
session_start();

if($_SESSION["cart_items"] == null){
    header("location: ./cart.php");
}

$u_name = "";
if (isset($_COOKIE["name"])) {
    $u_name = $_COOKIE["name"];
}

$u_phoneNo = "";
if (isset($_COOKIE["phone_number"])) {
    $u_phoneNo = $_COOKIE["phone_number"];
}

//var_dump($_SESSION["cart_items"]);

$total_price = 0;

if (isset($_SESSION["cart_items"]) && count($_SESSION["cart_items"]) > 0) {
        foreach ($_SESSION["cart_items"] as $theItem) {
            $total_price += $theItem->getTotalPrice();
        }
}
        

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
    include_once __DIR__ . '/components/header.php';
    ?>

    <div class="fst">
        <div id="confirmation_container">
            <a class="mobile" href="cart.php"><img src="./img/icons/return_arrow_left.svg" alt="menu"> Cart</a>
            <h1>Confirm Order</h1>
        </div>

        <form action="./include/order_submit.php">
            <div id="cart_info">
                <h2>My Cart</h2>
                <?php
                foreach ($_SESSION["cart_items"] as $theItem) {
                    confirm_item_template($theItem->getName(), $theItem->getItems_as_array(), $theItem->getTotalPrice(), $theItem->getImg(), $theItem->getQuantity());
                }
                ?>
            </div>
            <div id="order_info">
                <h2>Order Info</h2>
                <div>
                    <div>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="input_field" placeholder="Enter your name..." value="<?php echo $u_name ?>" required>
                    </div>
                    <div>
                        <label for="phone_number">Phone Number</label>
                        <input maxlength="9" type="tel" id="phone_number" name="phone_number" placeholder="0000000000" class="input_field" pattern="[0-9]{9}" value="<?php echo $u_phoneNo ?>" required>
                    </div>
                </div>
            </div>
            <div id="pick_up_time">
                <h2>Pick-up Time</h2>
                <div id="time_selection">
                    <div>
                        <input class="button_input" type="radio" name="pick_up_time" value="ASAP" checked>
                        <label class="button_label" for="ASAP" id="ASAP">ASAP</label>
                    </div>

                    <?php
                    $starting_hr = "06:30";
                    $closing_hr = "16:00";
                    if (date("w") == 6 || date("w") == 7) {
                        $starting_hr = "07:00";
                        $closing_hr = "15:00";
                    }
                    ?>
                    <div id="time_picker_container">
                        <label class="custom_pick_up_time" for="custom_pick_up_time">Pick-up Time: </label>
                        <input type="time" id="custom_pick_up_time" 
                        class="custom_pick_up_time" name="custom_pick_up_time" min="<?php echo $starting_hr; ?>" max="<?php echo $closing_hr; ?>">
                    </div>

                </div>
            </div>
            <input type="text" id="uid" name="uid" class="uid" value="<?php echo uniqid(); ?>" style="display: none;">
            <div id="confirm_order">
                <p id="total"><b>Total: $<?php echo number_format($total_price,2); ?></b> (Cash only)</p>
                <input type="submit" value="Place Order" class="btn form_btn" id="place_order_btn">
            </div>
        </form>
    </div>

    <?php
    include_once __DIR__ . '/components/footer.php';
    ?>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

    <script src="./js/index.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/button.js"></script>
    <script src="./js/confirm.js"></script>
    
</body>

</html>