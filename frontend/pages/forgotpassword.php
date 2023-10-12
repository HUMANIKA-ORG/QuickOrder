<?php
include_once("../header.php");
include_once("../../config/connection.php");
?>



<link rel="stylesheet" href="../../assets/style.css">

<div class="brand">
    <img src="../../assets/img/humanikastore-circle.png" alt="">
    <h1>Humanika <br> Store</h1>
</div>

<form action="">
    <div class="head-form">        
        <h1>Lupa Password</h1>
    </div>
    <div class="content-form">
        <label for="">Username</label>
        <input type="text" placeholder="Masukan Username">
        <label for="">Email</label>
        <input type="text" placeholder="Masukan Email">
        <a href="register.php">Belum punya akun? Register disini!</a>
        <button type="submit">Send Email</button>
    </div>
</form>



<?php
include_once("../footer.php");
?>