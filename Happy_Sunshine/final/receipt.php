<?php

include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
include_once __DIR__ . "/include/dbh_inc.php";
session_start();
?>

<?php $activePage = "receipt.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/receipt.css">
</head>
<body>
    <?php
    include_once __DIR__ .'/components/header.php';
    ?>

    <div class="container">
        <div class="receipt_header">
            <div id="title">
                <a class="mobile" href="index.php"><img src="./img/icons/return_arrow_left.svg" alt="">Home</a>
                <h1>Reciept</h1>
            </div>
            <p>Thank you for your order!</p>
            <p id="warning">Please show this receipt to the owner when picking up your order</p>
        </div>

        <?php
            $orders_info= getOrder($conn, $_GET["o_id"]);
            $orders = unserialize($orders_info["o_order_detail"]);
            $total_price = 0;
            foreach($orders as $theItem){
                receipt_item_template($theItem->getName(), $theItem->getItems_as_array(), $theItem->getTotalPrice(), $theItem->getImg(), $theItem->getQuantity());
                $total_price += $theItem->getTotalPrice();
            }

            $orderID = $orders_info["o_id"];
            $name = $orders_info["o_u_name"];
            $phone_number = $orders_info["o_u_phone_no"];
            $pickUp = $orders_info["o_pickupTime"];
            $date = $orders_info["o_ts"]
            ?>

        <div class="order_info">
            <ul>
                <li id="total">Total: $<?php echo number_format($total_price,2); ?></li>
                <li>Order number: #<?php echo $orderID; ?></li>
                <li>Date: <?php echo $date ?></li>
                <li>Name: <?php echo $name; ?></li>
                <li>Phone No.: <?php echo $phone_number; ?></li>
                <li>Estimated pick-up time: <?php echo $pickUp ?></li>
            </ul>
                    
            <a href="./index.php" class="btn hidden" id="track_order">Home</a>
        </div>
    </div>

    

    <?php
    include_once __DIR__ .'/components/footer.php';
    ?>

</div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=&v=weekly&channel=2"
      async
    ></script>
    <script src="./js/index.js"></script>
    <script src="./js/g_map.js"></script>
    <script src="./js/header.js"></script>
</body>
</html>
