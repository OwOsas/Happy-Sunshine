<?php
session_start();
include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php"
?>

<?php $activePage = "recent_orders.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recent Orders | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/recent_orders.css">
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
    <?php
    if (!isset($_COOKIE["phone_number"]) && !isset($_COOKIE["name"])) {
        if (isset($_GET["phone_number"]) && isset($_GET["name"])) {
            setcookie("name", $_GET["name"], time() + (60 * 60 * 24 * 30), "/");
            setcookie("phone_number", $_GET["phone_number"], time() + (60 * 60 * 24 * 30), "/");
            header("location: ./recent_orders.php");
        }
    }

    if (isset($_COOKIE["phone_number"]) && isset($_COOKIE["name"]) && !userExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"])) {
        createUser($conn, $_COOKIE["name"], $_COOKIE["phone_number"]);
    }

    include_once __DIR__ . '/components/header.php';

    if (isset($_COOKIE["phone_number"]) && isset($_COOKIE["name"]) && userExists($conn, $_COOKIE["name"], $_COOKIE["phone_number"])) {
        include_once __DIR__ . '/recent_order_gen.php';
    } else {
        include_once __DIR__ . '/components/login_model.php';
    }
    
    include_once __DIR__ . '/components/footer.php';
    ?>

    <script src="./js/index.js"></script>
    <script src="./js/header.js"></script>
</body>

</html>