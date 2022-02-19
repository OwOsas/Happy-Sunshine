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
            if($is_single == 1){
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
        if ($is_single == 1){
            $type = "radio";
        }
        else{
            $type = "checkbox";
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
        echo '<p class="price_tag">+$'. number_format($price,2) . '</p>';
        echo '            <input type="'. $type . '" name="'. $item_category . '" value="'. $item_name . '" '. $checkmark . '>';
        echo '            <label for="'. $item_name . '">'. $item_name . '</label>';
        echo '        </div>';
    }