<?php
include_once("../header.php");

?>
<link rel="stylesheet" href="../../assets/style.css">

<div class="first">
    <img src="../../assets/img/humanikastore-circle.png" alt="">
    <h1>Humanika <br> Store</h1>
</div>



<form action="">
    <h1>Login Account</h1>
    <label for="">Username</label>
    <input type="text" placeholder="Masukan Username">
    <a href="forgotpassword.php">Lupa Password?</a>
    <label for="">Password</label>
    <input type="password" placeholder="Masukan Password">
    <a href="register.php">Belum punya akun? Register disini!</a>
    <button type="submit">Login</button>
</form>


<?php
include_once("../footer.php");
?>