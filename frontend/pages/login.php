<?php
include_once("../header.php");

?>
<link rel="stylesheet" href="../../assets/style.css">

<div class="brand">
    <img src="../../assets/img/humanikastore-circle.png" alt="">
    <h1>Humanika <br> Store</h1>
</div>



<form action="">
    <div class="head-form">
        <h1>Login Account</h1>
    </div>
    <div class="content-form">
        <label>Username</label>
        <input type="text" placeholder="Masukan Username">
        <a href="forgotpassword.php">Lupa Password?</a>
        <label>Password</label>
        <input type="password" placeholder="Masukan Password">
        <a href="register.php">Belum punya akun? Register disini!</a>
        <button type="submit">Login</button>
    </div>
</form>


<?php
include_once("../footer.php");
?>