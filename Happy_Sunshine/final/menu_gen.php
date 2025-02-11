<div>
  <div id="food_menu_container">
    <a class="mobile" href="index.php"><img src="./img/icons/return_arrow_left.svg" alt=""> Home</a>
    <h1>Menu</h1>
  </div>

  <div id="food_menu">
    <?php

    include_once './include/dbh_inc.php';
    get_menu_items($conn);
    ?>
  </div>
</div>