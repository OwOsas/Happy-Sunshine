<?php
session_start();

$alreadyUploaded = false;
//Check if passed item already exist in session
if (isset($_SESSION["cart_items"])){
    if(isset($_GET["uid"])){
        foreach($_SESSION["cart_items"] as $item){
            if($item->getUID() == $_GET["uid"]){
                $alreadyUploaded = true;
            }
        }
    }
}
else{
    $_SESSION["cart_items"] = array();
}

$reserved_words = ["i_name", "id", "uid", "clear", "delete", "order_note"];



//pass new item into
if(isset($_GET["uid"]) && !$alreadyUploaded){
    $price_dict = get_price_dict($conn, $_GET["i_name"]);
    echo '<pre>' , var_dump($_GET) , '</pre>';

    $passed_item = new cart_item($_GET["uid"], $_GET["id"], $_GET["i_name"], get_thumbnail_img($conn, $_GET["i_name"]), get_item_price($conn, $_GET["i_name"]));
    $keys = array_keys($_GET);
    foreach($keys as $key){
        if(!in_array($key, $reserved_words)){
            if(gettype($_GET[$key]) != "array"){
                $passed_item->addItem($key, $_GET[$key], floatval($price_dict[$_GET[$key]]));
            }
            else{
                foreach($_GET[$key] as $i){
                    $passed_item->addItem($key, $i, floatval($price_dict[$i]));
                }
            }
        }
    }
    array_push($_SESSION["cart_items"], $passed_item);
}



//Check if user is logged in
// $_SESSION["cart"] = 

if (!isset($_COOKIE["uid"])){
    setcookie("uid", uniqid("", true));
}

?>