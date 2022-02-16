<menu>
<div id="food_menu_container">
    <a class="mobile" href="index.php"><img src="./img/icons/return_arrow_left.svg" alt=""> Home</a>
    <h1>Menu</h1>
</div>

<div id="food_menu">
    <?php
    function generate_menu_items($food_name, $icon_link, $page_link){
        echo '    <a class="food_item" href="' . $page_link . '">';
        echo '        <img src="' . $icon_link . '" alt="">';
        echo '        <p>' . $food_name . '</p>';
        echo '    </a>';
    }

    generate_menu_items("Breakfast Sandwiches","./img/icons/breakfast-sandwich.svg", "./customize.php");
    generate_menu_items("French Toast","./img/icons/breakfast-sandwich.svg", "./customize.php");
    generate_menu_items("Cheesesteaks","./img/icons/breakfast-sandwich.svg", "./customize.php");
    generate_menu_items("Burgers","./img/icons/breakfast-sandwich.svg", "./customize.php");
    generate_menu_items("Hot Dog & Sausage","./img/icons/breakfast-sandwich.svg", "./customize.php");
    generate_menu_items("Side Orders","./img/icons/breakfast-sandwich.svg", "./customize.php");
    generate_menu_items("Drinks","./img/icons/breakfast-sandwich.svg", "./customize.php");
    ?>
</div>
</menu>



