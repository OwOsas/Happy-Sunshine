<link rel="stylesheet" href="./css/cart.css">
<?php
session_start();

include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
include_once __DIR__ . "/include/dbh_inc.php";

customization_cart_item_template("This is the name", ["item 1", "item 2"], 1.25);