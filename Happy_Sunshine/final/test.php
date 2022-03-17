<link rel="stylesheet" href="./css/cart.css">
<?php
session_start();
include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
include_once __DIR__ . "/include/dbh_inc.php";

//customization_cart_item_template("This is the name", ["item 1", "item 2"], 1.25);
$pickupTime = "12:00";
$total_price = 6.25;
$userID = 1;
placeOrder($conn, $_COOKIE["name"], $_COOKIE["phone_number"], $userID, uniqid(), $_SESSION["cart_items"], $pickupTime, $total_price);

