<?php
session_start();
include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
include_once __DIR__ . "/include/dbh_inc.php";
?>

<?php $activePage = "index.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/menu.css">
</head>

<body>
    <?php
    include_once __DIR__ . '/components/header.php';
    ?>

    <div class="banner desktop">

    </div>

    <div class="fst">
        <h2>Breakfast Sandwich</h2>
        <p>Our classic breakfast staple with your choice of protein + extras</p>

        <div id="start_here">

            <div class="btn_container">
                <h1 id="welcome">Welcome!</h1>
                <a href="./menu.php" class="btn" id="start_order">
                    Start Order
                    <img src="./img/icons/arrow_right.svg" alt="">
                </a>

                <!-- <div> -->
                <a href="./recent_orders.php" class="btn" id="recent">
                    Recent Orders
                </a>
                <!-- <div class="btn" id="favorites">
                        Favorites
                        <img src="" alt="">
                    </div> -->
                <!-- </div> -->
            </div>

            <?php
            if (isset($_COOKIE["name"]) && isset($_COOKIE["phone_number"]) && userExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"])) {
                $isEmpty = false;

                if (isset($_COOKIE["name"]) && isset($_COOKIE["phone_number"]) && userExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"])) {
                    $userID = getUserID($conn, $_COOKIE["name"], $_COOKIE["phone_number"]);
                    $sql = "SELECT * FROM orders WHERE o_u_id = '" . $userID . "'";
                    $result = mysqli_query($conn, $sql);

                    if ($result && !($result->num_rows == 0)) {
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 1) {
                            $order_array = array();
                            while ($rows = mysqli_fetch_assoc($result)) {
                                array_push($order_array, $rows);
                            }

                            $row = end($order_array);

                            $orders = unserialize($row["o_order_detail"]);
                            $items = "";
                            foreach ($orders as $theOrder) {
                                $items .= $theOrder->getName() . " ×" . $theOrder->getQuantity();
                                if ($theOrder != end($orders)) {
                                    $items .= ", ";
                                }
                            }
                            $price = $row["o_price"];
                            $orderID = $row["o_id"];
                            $pickupTime = $row["o_pickupTime"];
                            $img = reset($orders)->getImg();
                        } elseif ($resultCheck == 1) {
                            $row = mysqli_fetch_assoc($result);

                            $orders = unserialize($row["o_order_detail"]);
                            $items = "";
                            foreach ($orders as $theOrder) {
                                $items .= $theOrder->getName() . " ×" . $theOrder->getQuantity();
                                if ($theOrder != end($orders)) {
                                    $items .= ", ";
                                }
                            }
                            $price = $row["o_price"];
                            $orderID = $row["o_id"];
                            $pickupTime = $row["o_pickupTime"];
                            $img = reset($orders)->getImg();
                        }
                    } else {
                        $isEmpty = true;
                    }
                }

                if (!$isEmpty) {
                    include_once __DIR__ . "/components/tracking_card.php";
                }
            }
            ?>

            <div class="find_us">
                <div>
                    <img src="./img/icons/truck.svg" alt="">
                    <div>
                        <h3>Find us at:</h3>
                        <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                            33rd and Arch Street,<br> Philadelphia, PA 19104
                        </a>
                        <p>6am to 2:30pm</p>
                        <b>We are a cash only truck!</b>
                        <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                            View in Google Maps →
                        </a>
                    </div>
                </div>
            </div>

            <!--The div element for the map -->
            <div id="map"></div>



        </div>
    </div>


    <?php
    include_once __DIR__ . '/components/footer.php';
    ?>

    </div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=&v=weekly&channel=2" async></script>
    <script src="./js/index.js"></script>
    <script src="./js/g_map.js"></script>
    <script src="./js/header.js"></script>
</body>

</html>