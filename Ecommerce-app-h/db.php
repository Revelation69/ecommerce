<?php

require "config/constants.php";

$servername = ecommerce_db;
$username = ecommerce_user;
$password = ecommerce_root_pass;
$db = ecommerce_db;

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>