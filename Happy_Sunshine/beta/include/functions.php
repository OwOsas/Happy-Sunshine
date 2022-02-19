<?php
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
        echo '    <a class="food_item" href="' . $page_link . '">';
        echo '        <img src="img/menu/icons/' . $icon_link . '" alt="">';
        echo '        <p>' . $food_name . '</p>';
        echo '    </a>';
    }