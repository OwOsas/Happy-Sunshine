<?php
session_start();
    include_once __DIR__ . "/config.php";
    include_once __DIR__ . "/include/functions.php"
?>

<?php $activePage = "menu.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/menu.css">
</head>
<body>
    <?php
        include_once __DIR__ .'/components/header.php';
        include_once __DIR__ .'/menu_gen.php';
    ?>

    <?php
        include_once __DIR__ .'/components/footer.php';
    ?>

    <script src="./js/index.js"></script>
    <script src="./js/header.js"></script>
</body>
</html>