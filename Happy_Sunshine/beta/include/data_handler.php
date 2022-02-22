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

//pass new item into
if(isset($_GET["uid"]) && !$alreadyUploaded){
    echo "Passing New Item";
    $passed_item = new cart_item($_GET["uid"], $_GET["id"], $_GET["i_name"]);
    $keys = array_keys($_GET);
    foreach($keys as $key){
        if($key != "uid" && $key != "id" && $key != "i_name"){
            if(gettype($_GET[$key]) != "array"){
                $passed_item->addItem($key, $_GET[$key]);
            }
            else{
                foreach($_GET[$key] as $i){
                    $passed_item->addItem($key, $i);
                }
            }
        }
    }
    array_push($_SESSION["cart_items"], $passed_item);
}

var_dump($_SESSION["cart_items"]);




//Check if user is logged in
// $_SESSION["cart"] = 

if (!isset($_COOKIE["uid"])){
    setcookie("uid", uniqid("", true));
}

?>