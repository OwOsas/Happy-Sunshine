<div class="order_tracking">
    <div class="order_no">
        <h2><span>Last Order</span> <br> <b>Pick Up Time: </b>
            <!-- PHP -->
            <?php echo $pickupTime; ?>
        </h2>
        <a href="./receipt.php?o_id=<?php echo $orderID; ?>">
            Order #
            <!-- PHP -->
            <?php echo $orderID;?>
        </a>
    </div>
    <div class="status_tracker">
        <!-- <div id="order_placed">
            <p>Order Placed</p>
            <img src="./img/icons/order_tracking_active.svg" alt="">
        </div>
        <div class="dash"></div>
        <div id="order_placed">
            <p>Order Preparing</p>
            <img src="./img/icons/order_tracking_active.svg" alt="">
        </div>
        <div class="dash"></div>
        <div id="order_placed">
            <p>Order Ready</p>
            <img src="./img/icons/order_tracking_active.svg" alt="">
        </div> -->

    </div>
    <div class="food_item">
            <img src="./img/menu/thumbnail/<?php echo $img; ?>" alt="">
            <h3 class="item_name"><?php echo $items; ?></h3>
            <p class="item_price">Total: $<?php echo $price ?></p>
        </div>

    <a href="./receipt.php?o_id=<?php echo $orderID; ?>">View Receipt →</a>
</div>