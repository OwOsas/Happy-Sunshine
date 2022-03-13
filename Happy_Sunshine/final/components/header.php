<div id="header_container">
    <header>
        <div id="burger_menu" class="mobile"></div>

        <a id="logo" href="./index.php">
            <!-- <img class="mobile" src=""    alt=""> -->
            <img class="" src="./img/HS_logo.svg" alt="">
        </a>

        <?php
            $pages = array();
            $pages["menu.php"] = "Menu";
            $pages["recent_orders.php"] = "Recent Orders";
            $pages["login.php"] = "Login";
        ?>

        <ul class="desktop menu" id="desktop_menu">
            <?php foreach($pages as $url=>$title):?>
                <li>
                    <a <?php if($url === $activePage):?>class="active"<?php endif;?> href="./<?php echo $url;?>">
                        <?php echo $title;?>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>

        <a id="cart" href="./cart.php"><img src="./img/icons/cart.svg" alt=""></a>
    </header>

    <ul id="mobile_menu" class="mobile menu">        
        <li class="mobile"><a href="<?php echo './menu.php';?>">Menu</a></li>
        <li><a href="./recent_orders.php">Recent Orders</a></li>
        <li><a href="./recent_orders.php">Login</a></li>
        <!-- <li><a href="">Profile</a></li> -->
    </ul>
</div>
