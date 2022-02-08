<?php
include_once "./config.php";
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
</head>

<body>
     <?php
     include_once __DIR__ .'/components/header.php';
     ?>

     <a href="./menu.php" class="backBtn">
          <h2 class="backBtn_text"> <- Back </h2>
     </a>

     <div class="banner">
          
     </div>
     
     <div class="menuContent">
          <h1>Breakfast Sandwich</h1>
          <p class="price">$4.00</p>
          <p>Our classic breakfast staple with your choice of protein + extras</p>
          
          <div id="start_here">

          <div class="bread_container">
               <p><b>Bread</b> Choose 1</p>
               <div class="menu_btnContainer">
                    <a class="btn_options option1" id="bread_option1">
                         Bagel 
                    </a>
                    <a  class="btn_options option2" id="bread_option2">
                         Hoagie Roll
                    </a>
               </div>
          </div>

          <div class="protein_container">
               <p><b>Protein</b> Choose 1</p>
               <div class="menu_btnContainer">
                    <a class="btn_options option1" id="protein_option1">
                         None
                    </a>
                    <a class="btn_options option2" id="protein_option2">
                         Bacon
                    </a>
                    <a class="btn_options option1" id="protein_option3">
                         Turkey Bacon
                    </a>
                    <a class="btn_options option2" id="protein_option4">
                         Sausage
                    </a>
                    <a class="btn_options option1" id="protein_option5">
                         Ham
                    </a>
                    <a class="btn_options option2" id="protein_option6">
                         Hot Ham
                    </a>
                    <a class="btn_options option1" id="protein_option7">
                         Turkey Breast
                    </a>
                    <a class="btn_options option2" id="protein_option8">
                         Pork Roll
                    </a>
                    <a class="btn_options option1" id="protein_option9">
                         Scrapple
                    </a>
                    <a class="btn_options option2" id="protein_option10">
                         Hot Sausage
                    </a>
                    <a class="btn_options option1" id="protein_option11">
                         Kielbasa
                    </a>
                    <a class="btn_options option2" id="protein_option12">
                         Steak
                    </a>
                    <a class="btn_options option1" id="protein_option13">
                         Italian Sausage
                    </a>
               </div>
          </div>

          <div class="option_container">
               <p><b>Option</b> Choose 1</p>
               <div class="menu_btnContainer">
                    <a class="btn_options option1" id="option_option1">
                         Egg 
                    </a>
                    <a class="btn_options option2" id="option_option2">
                         Hashbrown
                    </a>
                    <a class="btn_options option1" id="option_option3">
                         Cheese
                    </a>
               </div>
          </div>

          <div class="topping_container">
               <p><b>Option</b> Choose 1</p>
               <div class="menu_btnContainer">
                    <a class="btn_options option1" id="topping_option1">
                         Egg 
                    </a>
                    <a class="btn_options option2" id="topping_option2">
                         Hashbrown
                    </a>
                    <a class="btn_options option1" id="topping_option3">
                         Cheese
                    </a>
               </div>
          </div>

          <br>
          <p><b>Comment:</b></p>
          <textarea name="comment" rows="5" cols="40"></textarea>

          <p class="finalInfo"><b>Total: $4.00</b> Cash Only!</p>

          <a href="./cart.php" class="btn" id="add_to_cart">
               Add To Cart
          </a>

          <div class="footer" style="height: 500px; width: 100%;">

          </div>

        </div>
    </div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="./js/index.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/customize.js"></script>
</body>
</html>