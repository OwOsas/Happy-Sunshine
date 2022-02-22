<?php
include_once __DIR__ . "/config.php";
?>

<?php $activePage = "profile.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <?php
        include_once __DIR__ .'/components/header.php';
    ?>

    <div class="fst">
        <div class="main_container">
            <div class="input_field_container">
                <form action="#">
                    <label for="profile_name">Name:</label>
                    <input type="text" id="profile_name" name="profile_name" class="input_field">
                    <label for="profile_phone">Phone number:</label>
                    <input type="text" id="profile_number" name="profile_number" class="input_field">
                    <label for="profile_email">Email address:</label>
                    <input type="text" id="profile_email" name="profile_email" class="input_field">
                    <label for="profile_password">Password:</label>
                    <input type="password" id="profile_password" name="profile_password" class="input_field">
                    <input type="submit" value="Update profile" class="btn form_btn" id="update_profile_btn">
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