<?php
include_once("../config/connection.php");

if (isset($_POST['_username']) && isset($_POST['_password']) && isset($_POST['_email']) && isset($_POST['_repassword']) && isset($_POST['_regist']))
{
    $error;
    $username = $_POST['_username'];
    $password = $_POST['_password'];
    $repassword = $_POST['_repassword'];
    $email = $_POST['_email'];

    if (strlen($password) < 8)
    {
        $error = "Password minimal 8 karakter!";
        $_SESSION['error'] = $error;
        header("Location: $url/register.php");
    }
    else if ($password != $repassword)
    {
        $error = "Password tidak sama!";
        $_SESSION['error'] = $error;
        header("Location: $url/register.php");
    }
    else
    {
        $hashPassword = password_hash($password, PASSWORD_BCRYPT);
        $currentDateTime = date('Y-m-d H:i:s');
        $escaped_username = mysqli_escape_string($connection, $username);
        $escaped_password = mysqli_escape_string($connection, $hashPassword);
        $escaped_email = mysqli_escape_string($connection, $email);
        $query = "INSERT INTO users (`username`, `password`, `email`, `registerdate`) VALUES ('$escaped_username', '$escaped_password', '$escaped_email', '$currentDateTime')";
        $execute = $connection->query($query);

        if ($execute)
        {
            header("Location: $url/login.php");
        }
        else
        {
            $error = "Register Error! Please check your input";
            $_SESSION['error'] = $error;
            header("Location: $url/register.php");
        }
    }
}
?>