<?php
include_once("../header.php");
include_once("../../config/connection.php");

?>
<link rel="stylesheet" href="../../assets/style.css">

<div class="brand">
    <img src="../../assets/img/humanikastore-circle.png" alt="">
    <h1>Humanika <br> Store</h1>
</div>

<form action="../../backend/auth.php" method="POST">
    <div class="head-form">
        <h1>Register Account</h1>
        <?php
            if (isset($_SESSION['error']))
            {
                echo(
                    "<p class='error'>" .$_SESSION['error']."</p>"
                );
                unset($_SESSION['error']);
            }
        ?>
    </div>
    <div class="content-form">
        <label>Username</label>
        <input type="text" placeholder="Masukan Username" name="_username">
        <label>Email</label>
        <input type="email" placeholder="Masukan Email" name="_email">
        <label>Password</label>
        <input type="password" placeholder="Masukan Password" name="_password">
        <label>Re Type Password</label>
        <input type="password" placeholder="Masukan Ulang Password" name="_repassword">
        <a href="login.php">Sudah punya akun? Login disini</a>
        <button type="submit" name="_regist">Daftar</button>
    </div>
</form>

<?php
include_once("../footer.php");
?>