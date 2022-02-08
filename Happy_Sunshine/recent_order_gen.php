<div id="recent_orders_container">
    <a class="mobile" href="../Happy_Sunshine/"><img src="./img/icons/return_arrow_left.svg" alt=""> Home</a>
    <h1>Recent <br> Orders</h1>
</div>

<div id="recent_orders">
    <?php
    function generate_order($order_date, $icon_link, $order_items, $order_price){
        echo '    <div class="order">';
        echo '        <img src="' . $icon_link . '" alt="">';
        echo '        <div><p>' . $order_date . '</p>';
        echo '        <p>' . $order_items . '</p>';
        echo '        <p>' . $order_price . '</p>';
        echo '        <button class="btn">Order again</button></div>';
        echo '    </div>';
    }

    generate_order("11/11/2021","./img/banner_img_mobile.png","Breakfast Sandwich", "$5.00");
    generate_order("10/11/2021","./img/banner_img_mobile.png","Cheesesteaks, Coffee", "$7.00");
    generate_order("9/11/2021","./img/banner_img_mobile.png","Breakfast Sandwich, Cheesesteaks, Coffee", "$11.00");
    generate_order("11/11/2021","./img/banner_img_mobile.png","Breakfast Sandwich", "$5.00");
    generate_order("10/11/2021","./img/banner_img_mobile.png","Cheesesteaks, Coffee", "$7.00");
    generate_order("9/11/2021","./img/banner_img_mobile.png","Breakfast Sandwich, Cheesesteaks, Coffee", "$11.00");
    
    ?>
</div>