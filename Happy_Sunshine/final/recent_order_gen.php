<div id="recent_orders_container">
    <a class="mobile" href="index.php"><img src="./img/icons/return_arrow_left.svg" alt=""> Home</a>
    <h1>Recent Orders</h1>
</div>

<div id="recent_orders">
    <?php
    function generate_order($order_date, $order_item, $order_price){
        echo '    <div class="order">';
        echo '        <div><p class="item_name">' . $order_item . '</p>';
        echo '        <p>' . $order_price . '</p>';
        echo '        <p>' . $order_date . '</p>';
        echo '        <button class="btn">Order again</button></div>';
        echo '    </div>';
    }

    

    generate_order("11/11/2021","Breakfast Sandwich", "$5.00");
    generate_order("11/11/2021","Breakfast Sandwich, Hoagies", "$5.00");
    
    
    ?>
</div>