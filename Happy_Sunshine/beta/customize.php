<?php
include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
include_once __DIR__ . "/include/dbh_inc.php";
if(isset($_GET['id']) != true){
    echo "no variable";
    header("Location: ./menu.php");
    die();
}

$id = $_GET['id'];

$sql = "SELECT * FROM menu WHERE m_id = ". $id;
$result = mysqli_query($conn,$sql);

if($result && !($result->num_rows == 0)){
    $row = mysqli_fetch_assoc($result);
    $i_name = $row['m_name'];
    $i_price = $row['m_price'];
    $i_img_link = $row['m_image'];
    $i_description = $row['m_description'];
}

$sql = "SELECT * FROM customization WHERE c_nameofdish = '". $i_name . "'";
$result = mysqli_query($conn,$sql);

$category_list = [];

if($result && !($result->num_rows == 0)){
    if(mysqli_num_rows($result)>0){ 
        while ($row = mysqli_fetch_assoc($result)) {
            if (!(in_array([$row['c_category'], $row['c_ischeckbox']], $category_list))){
                array_push($category_list, [$row['c_category'], $row['c_ischeckbox']]);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakfast Sandwich | Happy Sunshine</title>
    <link rel="shortcut icon" type="image/svg" href="./img/favicon.svg">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/customize.css">
</head>
<body>
    <?php
        include_once __DIR__ .'/components/header.php';
    ?>

    <div id="customize_container">
        <a class="mobile" href="menu.php"><img src="./img/icons/return_arrow_left.svg" alt=""> Menu</a>
    </div>

    <div class="fst">
        <div id="customize_container">
            <div id="item_info">
                <img src="./imgmenu/thumbnail/<?php echo $i_img_link;?>" alt="Breakfast sandwich featured image">
                <div>
                    <h1><?php echo $i_name?></h1>
                    <p><?php echo $i_description?></p>
                </div>
            </div>

            <div id="customize_main">
                <form action="cart.php">
                    <?php 
                      foreach($category_list as $category){
                          customization_section_template($conn, $i_name, $category[0], $category[1]);
                      }
                    ?>
                    <div id="add_note_section">
                        <label for="order_note">Add note:</label>
                        <input type="text" id="order_note" name="order_note" class="input_field">
                    </div>
                    <div id="price_and_confirm_section">
                        <p id="total_price"><b>Total: $5.00</b> (Cash only)</p>
                        <input type="submit" value="Add to cart" class="btn form_btn" id="add_to_cart_btn">
                    </div>
                <form>
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
