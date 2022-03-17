<?php
include_once __DIR__ . "/dbh_inc.php";
// Menu Related
    function get_menu_items($conn){
        $sql = "SELECT * FROM menu";
        $result = mysqli_query($conn,$sql);

        if($result != false){
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck>0){
                while ($row = mysqli_fetch_assoc($result)) {
                    menu_template($row["m_name"], $row["m_icon"], $row['m_id']);
                }
            }
        }
    }

    function menu_template($food_name, $icon_link, $page_link){
        echo '    <a class="food_item" href="customize.php?id=' . $page_link . '">';
        echo '        <img src="img/menu/icons/' . $icon_link . '" alt="">';
        echo '        <p>' . $food_name . '</p>';
        echo '    </a>';
    }

    function customization_section_template($conn, $m_name, $category_name, $is_single){
        $sql = "SELECT * FROM customization WHERE c_nameofdish = '". $m_name . "' AND c_category = '" . $category_name ."'";
        $result = mysqli_query($conn,$sql); 

        if($result && !($result->num_rows == 0)){
            echo '<div class="customize_section">';
            echo '    <p class="section_title">'. $category_name .'</p>';
            if($is_single == 0){
                echo '    <p>Choose 1</p>';
            }
            else{
                echo '    <p>Optional</p>';
            }
            echo '    <div class="selection">';

            if(mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_assoc($result)) {
                    customization_item_template($row["c_category"], $row["c_option"], $row['c_ischeckbox'], $row['c_isdefault'], $row['c_additionalprice']);
                }
            }
            echo '    </div>';
            echo '</div>';
        }
    }

    function customization_item_template($item_category, $item_name, $is_single, $is_default, $price){
        if ($is_single == 0){
            $type = "radio";
        }
        else{
            $type = "checkbox";
            $item_category .= "[]";
        }

        if ($price == 0){
            $class = "without_price_tag";
        }
        else{
            $class = "with_price_tag";
        }

        if ($is_default == 1){
            $checkmark = "checked";
        }
        else{
            $checkmark = "";
        }

        echo '        <div  class="'. $class . '">';
        if ($price != 0){
            echo '<p class="price_tag">+$'. number_format($price,2) . '</p>';
        }
        echo '            <input class="button_input" type="'. $type . '" name="'. $item_category . '" value="'. $item_name . '" '. $checkmark . '>';
        echo '            <label class="button_label" for="'. $item_name . '">'. $item_name . '</label>';
        echo '        </div>';
    }

    function get_thumbnail_img($conn, $m_name){
        $sql = "SELECT * FROM menu WHERE m_name = '". $m_name . "'";
        $result = mysqli_query($conn,$sql);

        if($result != false){
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck==1){
                while ($row = mysqli_fetch_assoc($result)) {
                    return $row["m_image"];
                }
            }
        }
    }

    class cart_item{
        public function __construct(string $uid, int $id, string $name, string $img, float $price)
        {
            $this->id = $id;
            $this->uid = $uid;
            $this->name = $name;
            $this->items = array();
            $this->base_price = $price;
            $this->img = $img;
            $this->price_dict = array();
            $this->quantity = 1;
        }
        
        public function addItem(string $category, string $name, float $price){
            if(array_key_exists($category, $this->items)){
                array_push($this->items[$category], $name);
            }
            else{
                $this->items[$category] = array($name);
            }

            if(!array_key_exists($name, $this->price_dict)){
                $this->price_dict[$name] = $price;
            }
        }

        public function getItems(){
            return $this->items;
        }

        public function getPriceDict(){
            return $this->price_dict;
        }

        public function getBasePrice(){
            return $this->base_price;
        }

        public function getItems_as_array(){
            $array = [];
            foreach($this->items as $key){
                foreach($key as $i){
                    array_push($array, $i);
                }
            }
            return $array;
        }

        public function getUID(){
            return $this->uid;
        }

        public function getID(){
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }
        
        public function getPrice(){
            $total = $this->base_price;;
            foreach($this->price_dict as $price){
                $total += $price;
            }
            return $total;
        }

        public function getTotalPrice(){
            $total = $this->base_price;;
            foreach($this->price_dict as $price){
                $total += $price;
            }

            $total = $total *$this->quantity;
            return $total;
        }

        public function getImg(){
            return $this->img;
        }

        public function getQuantity(){
            return $this->quantity;
        }

        public function addQuantity($additional_quantity = 1){
            $this->quantity += $additional_quantity;
        }

        public function deductQuantity($additional_quantity = 1){
            $this->quantity -= $additional_quantity;
        }
    }

function cart_item_template(string $name, array $items, $price, string $img, string $i_UID, int $i_ID, int $quantity){
    echo '<div class="cart_item_card" id="' . $i_UID . '">';
    echo '    <div class="item">';
    echo '        <div class="img" style="background-image:url(./img/menu/thumbnail/' . $img . ');"></div>';
    echo '        <div class="item_description">';
    echo '            <h3>' . $name . '</h3>';
    echo '            <p>';
    $echo = "";
    foreach($items as $item){
        if($item != "None"){
            $echo .= $item;
            if($item != end($items)){
                $echo .= ", ";
            }
        }
    }
    echo substr($echo, 0);
    echo '</p>';
    echo '        </div>';
    echo '    </div>';
    echo '    <div class="price">$' . number_format($price,2) . '</div>';
    echo '    <div class="item_mod">';
    echo '        <a href="customize.php?id=' . $i_ID . '&edit=' . $i_UID . '"">Edit</a>';
    echo '        <a href="cart.php?remove=' . $i_UID . '">Remove</a>';
    echo '        <div class="quantity">';
    echo '            <a href="cart.php?deduct=' . $i_UID . '&unicode=' . uniqid() . '" class="subtract"></a>';
    echo '            <p>' . $quantity . '</p>';
    echo '            <a href="cart.php?add=' . $i_UID . '&unicode=' . uniqid() . '" class="add"></a>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
}

function confirm_item_template(string $name, array $items, $price, string $img, int $quantity){
    echo '<div class="item_info">';
    echo '    <img src="./img/menu/thumbnail/' . $img . '" alt="Cart Item Photo">';
    echo '    <div>';
    echo '        <p class="item_name">' . $name . ' &times' . $quantity  . '</p>';
    echo '        <p class="item_content">';
    $echo = "";
    foreach($items as $item){
        if($item != "None"){
            $echo .= $item;
            if($item != end($items)){
                $echo .= ", ";
            }

        }
    }
    echo $echo;
    echo '</p>';
    echo '        <p class="item_price">Price: $' . number_format($price,2) . '</p>';
    echo '    </div>';
    echo '</div>';

}


function receipt_item_template(string $name, array $items, $price, string $img, int $quantity){
    echo '<div class="cart_item_card">';
    echo '<div class="item">';
    echo '        <div class="img" style="background-image:url(./img/menu/thumbnail/' . $img . ');"></div>';
    echo '    <div class="item_description">';
    echo '    <h3>' . $name . ' &times' . $quantity  . '</h3>';
    echo '            <p>';
    $echo = "";
    foreach($items as $item){
        if($item != "None"){
            $echo .= $item;
            if($item != end($items)){
                $echo .= ", ";
            }
        }
    }
    echo $echo;
    echo '</p>';
    echo '</div>';
    echo '</div>';
    echo '<p class="price">$' . number_format($price, 2) . '</p>';
    echo '</div>';
}

function get_price_dict($conn, $i_name){
    $sql = "SELECT * FROM customization WHERE c_nameofdish = '" . $i_name . "'";
    $result = mysqli_query($conn, $sql);

    $price_dict = array();

    if ($result && !($result->num_rows == 0)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $price_dict[$row["c_option"]] = $row['c_additionalprice'];
            }
        }
    }
    return $price_dict;
}

function get_item_price($conn, $i_name){
    $sql = "SELECT * FROM menu WHERE m_name = '". $i_name . "'";
    $result = mysqli_query($conn,$sql);

    if($result != false){
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck==1){
            while ($row = mysqli_fetch_assoc($result)) {
                return $row["m_price"];
            }
        }
    }
}

function createUser($conn, $username, $phoneNo){
    $sql = "INSERT INTO users (u_name, u_phonenumber) VALUES (?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../confirm.php?error=stmtFailed");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $phoneNo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    //header("location: ../index.php?error=none");
}

function placeOrder($conn, $username, $phoneNo, $u_id, $o_uid, $o_orderdetail, $pickup_time, $price){
    $sql = "INSERT INTO orders (o_uid, o_order_detail, o_u_id, o_u_name, o_u_phone_no, 	o_pickupTime, o_price) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtFailed");
        exit(); 
    }
    $serialized_order = serialize($o_orderdetail);
    mysqli_stmt_bind_param($stmt, "ssisssd", $o_uid, $serialized_order, $u_id, $username, $phoneNo, $pickup_time,$price);

    mysqli_stmt_execute($stmt);
    echo mysqli_error($conn);
    mysqli_stmt_close($stmt);
}

function orderExists($conn, $username, $phoneNo, $uid){
    $sql = "SELECT * FROM users WHERE  u_name ='" . $username . "' AND u_phonenumber ='" . $phoneNo . "' AND o_uid ='" . $uid  . "';";

    $result = mysqli_query($conn,$sql);

    if ($result && $result->num_rows != 0) {
        return true;
    }
    else{
        return false;
    }
    return false;
}

function userExists($conn, $username, $phoneNo){
    $sql = "SELECT * FROM users WHERE  u_name ='" . $username . "' AND u_phonenumber ='" . $phoneNo . "';";

    $result = mysqli_query($conn,$sql);

    if ($result && !($result->num_rows == 0)) {
        return true;
    }
    else{
        return false;
    }
    return false;
}

function getUserID($conn, $username, $phoneNo){
    $sql = "SELECT * FROM users WHERE  u_name ='" . $username . "' AND u_phonenumber ='" . $phoneNo . "';";

    $result = mysqli_query($conn,$sql);

    if ($result && !($result->num_rows == 0)) {
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck==1){
            while ($row = mysqli_fetch_assoc($result)) {
                return $row["u_id"];
            }
        }
    }
    else{
        return false;
    }
    return false;
}

function getOrder($conn, $o_id){
    $sql = "SELECT * FROM orders WHERE o_id ='" . $o_id. "';";
    $result = mysqli_query($conn,$sql);

    if ($result && !($result->num_rows == 0)) {
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck==1){
            while ($row = mysqli_fetch_assoc($result)) {
                return $row;
            }
        }
        else{
            echo "more than one";
        }
    }
    else{
        echo "no results";
        return false;
    }
    return false;
}