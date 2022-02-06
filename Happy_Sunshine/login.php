<?php
include_once __DIR__ . "/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <?php
        include_once __DIR__ .'/components/header.php';
    ?>

    <div class="banner desktop">
        
    </div>

    <div class="fst">
        <div class="main_container">
            <div id="login_options">
                <a href="" class="active">Login</a>
                <a href="">Sign Up</a>
            </div>
            
            <div class="input_field_container">
                <form action="#">
                    <label for="login_email">Email Address:</label>
                    <input type="text" id="login_email" name="login_email" class="input_field">
                    <label for="login_password">Password:</label>
                    <input type="password" id="login_password" name="login_password" class="input_field">
                    <input type="submit" value="Login" class="btn" id="login_btn">
                </form>
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