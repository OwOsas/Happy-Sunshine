<?php
include_once __DIR__ . "/../config.php";
include_once __DIR__ . "/../include/functions.php";
include_once __DIR__ . "/../include/dbh_inc.php";
session_start();
//echo '<pre>' , var_dump($_SESSION["cart_items"]) , '</pre>';
//echo serialize($_SESSION["cart_items"][0]);

date_default_timezone_set("America/New_York"); 

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

if(isset($_GET["uid"])){
    if(orderExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"], $_GET["uid"])){
        header("location: ../confirm.php?error=order_exist");
    }
}
else{
    header("location: ../confirm.php?error=no_uid");
}

if(!userExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"]) && isset($_COOKIE["phone_number"]) && isset($_COOKIE["name"])){
    createUser($conn, $_COOKIE["name"], $_COOKIE["phone_number"]);
    echo "submit";
}

$userID = getUserID($conn, $_COOKIE["name"], $_COOKIE["phone_number"]);

if(isset($_GET["custom_pick_up_time"]) && $_GET["custom_pick_up_time"] != ""){
    $pickupTime = $_GET["custom_pick_up_time"];
}
else{
    if(isset($_GET["pick_up_time"]) && $_GET["pick_up_time"] == "ASAP"){
        $pickupTime = date("H:i");
    }
}

placeOrder($conn, $_COOKIE["name"], $_COOKIE["phone_number"], $userID, $_GET["uid"], $_SESSION["cart_items"], $pickupTime);

$_SESSION["cart_items"] = null;

//echo '<pre>' , var_dump($unserialize_item) , '</pre>';