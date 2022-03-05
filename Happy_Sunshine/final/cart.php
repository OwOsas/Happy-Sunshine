<?php
include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
include_once __DIR__ . "/include/data_handler.php";
?>

<?php $activePage = "cart.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your cart | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/cart.css">
</head>

<body>
    <!-- <div id="dev_switch">
        Switch btwn empty and have item
    </div> -->

    <?php
    include_once __DIR__ . '/components/header.php';
    ?>



    <div class="fst">
        <div id="title">
            <a class="mobile" href="menu.php"><img src="./img/icons/return_arrow_left.svg" alt="">Menu</a>
            <h1>My Cart</h1>
        </div>
        <!-- Cart Item Card -->
        
        <div id="cart_container">
            <div id="cart_items_container">
                <?php
                    if(count($_SESSION["cart_items"]) > 0){
                        foreach($_SESSION["cart_items"] as $theItem){
                            cart_item_template($theItem->getName(), $theItem->getItems_as_array(), $theItem->getPrice(), $theItem->getImg());
                        }
                        $isEmpty = false;
                    }
                    else{
                        $isEmpty = true;
                    }

                ?>
            </div>

            <!-- _____________________________________________ -->

            <div id="confirm_order" class = "<?php if($isEmpty){echo "hidden";}?>">
                <p><b>Total: $5.00</b></p>
                <a href="./confirm.php" class="btn" id="confirm_order_btn">
                    Confirm Order
                </a>
            </div>

            <div id="cart_empty" class = "<?php if(!$isEmpty){echo "hidden";}?>">
                <img src="./img/icons/cart_empty_crying_bird.svg" alt="" width="50%" height="50%">
                <h2>My cart is empty!</h2>

                </a>
            </div>
        </div>

        <a href="./menu.php" class="btn <?php if(!$isEmpty){echo "hidden";}?>" id="start_order">
            Order Now
            <img src="./img/icons/arrow_right.svg" alt="">
        </a>
    </div>



    <?php
    
    include_once __DIR__ . '/components/footer.php';
    ?>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script>
        //display empty page when no item in cart
        // if(document.getElementById("isEmpty").classList.contains('true')){
        //     document.getElementById("cart_empty").classList.remove("hidden");
        //     document.getElementById("confirm_order").classList.add("hidden");
        //     var card = document.getElementsByClassName("cart_item_card");
        //     if(card.length > 0){
        //         forEach(element => 
        //         element.classList.add("hidden")
        //     );
        //     }
        //     else{
        //         card.classList.add("hidden")
        //     }

        //     document.getElementById("start_order").classList.remove("hidden");
        // }
        // else{
        //     document.getElementById("cart_empty").classList.add("hidden");
        //     document.getElementById("confirm_order").classList.remove("hidden");
        //     var card = document.getElementsByClassName("cart_item_card");
        //     if(card.length > 0){
        //         forEach(element => 
        //         element.classList.remove("hidden")
        //     );
        //     }
        //     else{
        //         card.classList.remove("hidden")
        //     }
        //     document.getElementById("start_order").classList.add("hidden");
        // }

    </script>
    <script src="./js/index.js"></script>
    <script src="./js/g_map.js"></script>
    <script src="./js/header.js"></script>
</body>

</html>