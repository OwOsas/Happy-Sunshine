<?php
setcookie("name", "", time()-(60 * 60 * 24 * 30), "/");
setcookie("phone_number", "", time()-(60 * 60 * 24 * 30), "/");

header("location: ./index.php?logout=true");