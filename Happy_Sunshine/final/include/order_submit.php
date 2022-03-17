<?php
include_once __DIR__ . "/../config.php";
include_once __DIR__ . "/../include/functions.php";
include_once __DIR__ . "/../include/dbh_inc.php";
session_start();
//echo '<pre>' , var_dump($_SESSION["cart_items"]) , '</pre>';
//echo serialize($_SESSION["cart_items"][0]);

date_default_timezone_set("America/New_York"); 


//check cookie
$is_consistent = true;
if(isset($_COOKIE["name"])){
    if(!isset($_GET["name"]) || $_GET["name"] != $_COOKIE["name"]){
        echo "name not consistent";
        header("location: ../cart.php?error=none");
        $is_consistent = false;
    }
}
else{
    if(isset($_GET["name"])){
        $_COOKIE["name"] = $_GET["name"];
        setcookie("name", $_GET["name"], time()+(60 * 60 * 24 * 30), "/");
    }
}


if(isset($_COOKIE["phone_number"])){
    if(!isset($_GET["phone_number"]) || $_GET["phone_number"] != $_COOKIE["phone_number"]){
        echo "phone_number not consistent";
        $is_consistent = false;
    }
}
else{
    if(isset($_GET["phone_number"])){
        $_COOKIE["phone_number"] = setcookie("phone_number", $_GET["phone_number"], time()+(60 * 60 * 24 * 30), "/");
    }
}

echo orderExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"], $_GET["uid"]);


//check if uid exist
if(isset($_GET["uid"])){
    if(orderExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"], $_GET["uid"])){
        die();
        header("location: ../confirm.php?error=order_exist");
    }
}
else{
    header("location: ../confirm.php?error=no_uid");
}


//check if user exist, if no create one
if(isset($_COOKIE["phone_number"]) && isset($_COOKIE["name"]) && !userExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"])){
    createUser($conn, $_COOKIE["name"], $_COOKIE["phone_number"]);
    echo "submit";
}

$userID = getUserID($conn, $_COOKIE["name"], $_COOKIE["phone_number"]);


//check pickup time
if(isset($_GET["custom_pick_up_time"]) && $_GET["custom_pick_up_time"] != ""){
    $pickupTime = $_GET["custom_pick_up_time"];
}
else{
    if(isset($_GET["pick_up_time"]) && $_GET["pick_up_time"] == "ASAP"){
        $pickupTime = date("H:i");
    }
}

//total price
$total_price = 0;

if (isset($_SESSION["cart_items"]) && count($_SESSION["cart_items"]) > 0) {
        foreach ($_SESSION["cart_items"] as $theItem) {
            $total_price += $theItem->getTotalPrice();
        }
}

echo $total_price;

//place order
if(!orderExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"], $_GET["uid"])){
    placeOrder($conn, $_COOKIE["name"], $_COOKIE["phone_number"], $userID, $_GET["uid"], $_SESSION["cart_items"], $pickupTime,$total_price);
}


$_SESSION["cart_items"] = null;



header("location: ../receipt.php?o_id=" . mysqli_insert_id($conn));
//echo '<pre>' , var_dump($unserialize_item) , '</pre>';