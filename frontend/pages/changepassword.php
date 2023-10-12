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
        <h1>Ganti Password</h1>
    </div>
    <div class="content-form">
        <label>Password</label>
        <input type="password" placeholder="Masukan pasword baru">
        <label>Re Type Password</label>
        <input type="password" placeholder="Konfirmasi pasword baru">
        <a href="login.php">Belum Punya Akun?Register disini!</a>
        <button type="submit">Ganti Password</button>
    </div>
</form>



<?php
include_once("../footer.php");
?>