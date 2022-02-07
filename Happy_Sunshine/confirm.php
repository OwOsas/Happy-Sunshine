
<?php
include_once __DIR__ . "/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Order | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/order.css">
</head>
<body>
    <?php
        include_once __DIR__ .'/components/header.php';
    ?>

    <div class="banner desktop">
        
    </div>

    <div class="fst">
        <div class="main_container">
            <h1>My Cart</h1>
            <h3>Breakfast Sandwich</h3>
            <p>Bagel, Bacon, Egg, Cheese, Ketchup, Salt, Pepper</p>
            <p>Price: <b>$5.00</b></p>
            <h3><b>Total: $5.00</b> Cash Only</h3>
        </div>
    </div>

    <div class="fst">
        <div class="main_container">
            <div id="info">
                
            </div>
            <h1>Order Info</h1>
            <div class="input_field_container">
                <form action="#">
                    <label for="login_name">Name</label>
                    <input type="text" id="login_name" name="login_name" class="input_field">
                    <label for="phonenumber">Phone Number</label>
                    <input type="phonenumber" id="phonenumber" name="phonenumber" class="input_field">
                </form>
            </div>
            <h3>Pick-up Time</h3>
            <div class="Choose pick-up time">
            <div class="find_us">
                    <div>
                        <img src="./img/icons/truck.svg" alt="">
                        <div>
                            <h3>Find us at:</h3>
                            <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                                33rd and Arch Street,<br> Philadelphia, PA 19104
                            </a>
                            <a target="_blank" href="https://www.google.com/maps/search/33rd+and+Arch+Street,++Philadelphia,+PA+19104/@39.9593223,-75.1915078,17z/data=!3m1!4b1">
                                View in Google Maps <img src="./img/icons/link_arrow_right.svg" alt="">
                            </a>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>


    

    <?php
        include_once __DIR__ .'/components/footer.php';
    ?>
    
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    
    <script src="./js/index.js"></script>
    <script src="./js/header.js"></script>
</body>
</html>
