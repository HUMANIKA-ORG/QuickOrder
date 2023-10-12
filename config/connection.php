<?php
date_default_timezone_set('Asia/Jakarta');
$servername = "localhost";
$username = "root";
$password = "";
$database = "quickorder";
$url = "http://localhost/QuickOrder/frontend/pages";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Connection failed ");
}
session_start();
?> 