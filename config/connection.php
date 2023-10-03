<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quickorder";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Connection failed ");
}
session_start();
?> 