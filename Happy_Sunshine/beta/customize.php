
<?php
include_once __DIR__ . "/config.php";
include_once __DIR__ . "/include/functions.php";
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
                <img src="./img/breakfast-sandwich.png" alt="Breakfast sandwich featured image">
                <div>
                    <h1>Breakfast Sandwich</h1>
                    <p>Our classic breakfast sandwich comes with bacon, egg, and cheese.</p>
                </div>
            </div>

            <div id="customize_main">
                <form action="cart.php">
                    <div class="customize_section">
                        <p class="section_title">Bread</p>
                        <p>Choose 1</p>
                        <div class="selection">
                            <div  class="without_price_tag">
                                <input type="radio" name="bread" value="bagel" checked>
                                <label for="bagel">Bagel</label>
                            </div>
                            <div class="without_price_tag">
                                <input type="radio" name="bread" value="hoagie_roll">
                                <label for="hoagie_roll">Hoagie Roll</label>
                            </div>
                        </div>
                    </div>
                    <div class="customize_section">
                        <p class="section_title">Protein</p>
                        <p>Choose 1</p>
                        <div class="selection">
                            <div class="with_price_tag">
                                <p class="price_tag">+$1.00</p>
                                <input type="radio" name="protein" value="bacon" checked>
                                <label for="bacon">Bacon</label>
                            </div>
                            <div class="with_price_tag">
                                <p class="price_tag">+$1.00</p>
                                <input type="radio" name="protein" value="ham">
                                <label for="ham">Ham</label>
                            </div>
                            <div class="with_price_tag">
                                <p class="price_tag">+$1.00</p>
                                <input type="radio" name="protein" value="turkey">
                                <label for="turkey">Turkey</label>
                            </div>
                            <div class="with_price_tag">
                                <p class="price_tag">+$3.00</p>
                                <input type="radio" name="protein" value="steak">
                                <label for="steak">Steak</label>
                            </div>
                            <div class="with_price_tag">
                                <p class="price_tag">+$1.00</p>
                                <input type="radio" name="protein" value="sausage">
                                <label for="sausage">Sausage</label>
                            </div>
                            <div class="with_price_tag">
                                <p class="price_tag">+$2.00</p>
                                <input type="radio" name="protein" value="kielbasa">
                                <label for="kielbasa">Kielbasa</label>
                            </div>
                            <div class="with_price_tag">
                                <p class="price_tag">+$1.00</p>
                                <input type="radio" name="protein" value="pork_roll">
                                <label for="pork_roll">Pork Roll</label>
                            </div>
                            <div class="with_price_tag">
                                <p class="price_tag">+$1.00</p>
                                <input type="radio" name="protein" value="scrapple">
                                <label for="scrapple">Scrapple</label>
                            </div>
                            <div class="without_price_tag">
                                <input type="radio" name="protein" value="none">
                                <label for="none">None</label>
                            </div>
                        </div>
                    </div>
                    <div class="customize_section">
                        <p class="section_title">More</p>
                        <p>Optional</p>
                        <div class="selection">
                            <div class="without_price_tag">
                                <input type="checkbox" name="more" value="egg">
                                <label for="egg">Egg</label>
                            </div>
                            <div class="without_price_tag">
                                <input type="checkbox" name="more" value="hashbrown" checked>
                                <label for="hashbrown">Hashbrown</label>
                            </div>
                        </div>
                    </div>
                    <div class="customize_section">
                        <p class="section_title">Toppings</p>
                        <p>Optional</p>
                        <div class="selection">
                            <div class="without_price_tag">
                                <input type="checkbox" name="toppings" value="cheese" checked>
                                <label for="cheese">Cheese</label>
                            </div>
                            <div class="without_price_tag">
                                <input type="checkbox" name="toppings" value="ketchup" checked>
                                <label for="ketchup">Ketchup</label>
                            </div>
                            <div class="without_price_tag">
                                <input type="checkbox" name="toppings" value="salt" checked>
                                <label for="salt">Salt</label>
                            </div>
                            <div class="without_price_tag">
                                <input type="checkbox" name="toppings" value="pepper" checked>
                                <label for="pepper">Pepper</label>
                            </div>
                        </div>
                    </div>
                    <div id="add_note_section">
                        <label for="order_note">Add note:</label>
                        <input type="text" id="order_note" name="order_note" class="input_field">
                    </div>
                    <input type="submit" value="Add to cart" class="btn form_btn" id="add_to_cart_btn">
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
