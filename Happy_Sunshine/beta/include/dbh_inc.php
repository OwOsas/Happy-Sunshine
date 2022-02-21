<?php

$db_serverName = "localhost";
$db_username = "root";
$db_pwd = "root";
$db_name = "db_happysunshine";

$conn = mysqli_connect($db_serverName, $db_username, $db_pwd, $db_name);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

