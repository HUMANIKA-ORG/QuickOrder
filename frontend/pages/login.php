<?php
    include_once("../header.php");

?>
<link rel="stylesheet" href="../../assets/style.css">

<div class="first">
    <img src="../../assets/img/humanikastore-circle.png" alt="">
    <h1>Humanika <br> Store</h1>
</div>

<form action="" >
    <h1>Login Account</h1>
        <b><label for="">Username</label></b>
        <input type="text" placeholder="Masukan Username">
        
        <b><label for="">Password</label></b>
        <input type="text" placeholder="Masukan Password">
    <a href="register.php"><b>Belum punya akun Register disini</b></a>
        <center><button>Login</button></center>
</form>

<?php
    include_once("../footer.php");
?>