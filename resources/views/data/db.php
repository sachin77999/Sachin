<?php
$db_host = 'localhost';
$db_user = "root";
$db_pass = "";
$db_name = "laravel_online_shop";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($con) {
    echo "COnnection Created";
}