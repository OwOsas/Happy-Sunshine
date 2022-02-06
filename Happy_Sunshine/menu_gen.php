<menu>
<div id="food_menu_container">
    <a class="mobile" href="../Happy_Sunshine/"><img src="./img/icons/return_arrow_left.svg" alt=""> Home</a>
    <h1>Menu</h1>
</div>

<div id="food_menu">
    <?php
    function generate_menu_items($food_name, $icon_link){
        echo '    <a class="food_item">';
        echo '        <img src="' . $icon_link . '" alt="">';
        echo '        <p>' . $food_name . '</p>';
        echo '    </a>';
    }

    generate_menu_items("Breakfast Sandwiches","./img/icons/breakfast-sandwich.svg");
    generate_menu_items("Breakfast Sandwiches","./img/icons/breakfast-sandwich.svg");
    generate_menu_items("Breakfast Sandwiches","./img/icons/breakfast-sandwich.svg");
    generate_menu_items("Breakfast Sandwiches","./img/icons/breakfast-sandwich.svg");
    generate_menu_items("Breakfast Sandwiches","./img/icons/breakfast-sandwich.svg");
    generate_menu_items("Breakfast Sandwiches","./img/icons/breakfast-sandwich.svg");
    generate_menu_items("Breakfast Sandwiches","./img/icons/breakfast-sandwich.svg");
    ?>
</div>
</menu>



