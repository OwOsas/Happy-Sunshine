<div id="header_container">
    <header>
        <div id="burger_menu" class="mobile"></div>

        <a id="logo" href="./index.php">
            <!-- <img class="mobile" src=""    alt=""> -->
            <img class="" src="./img/HS_logo.svg" alt="">
        </a>

        <ul class="desktop menu">
            <li class="active"><a href="">Home</a></li>
            <li><a href="">Menu</a></li>
            <li><a href="./recent_orders.php">Recent Orders</a></li>
            <li><a href="">Profile</a></li>
        </ul>

        <a id="cart" href="./cart.php"><img src="./img/icons/cart.svg" alt=""></a>
    </header>

    <ul id="mobile_menu" class="mobile menu">
        <li><a href="<?php echo './';?>">Home</a></li>
        
        <li class="mobile"><a href="<?php echo './menu.php';?>">Menu</a></li>
        <li><a href="./recent_orders.php">Recent Orders</a></li>
        <li><a href="./login.php">Login</a></li>
        <!-- <li><a href="">Profile</a></li> -->
    </ul>
</div>
