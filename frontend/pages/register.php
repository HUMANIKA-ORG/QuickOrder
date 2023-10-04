<?php
    include_once("../header.php");
?>
<link rel="stylesheet" href="../../assets/style.css">
<link rel="stylesheet" href="../../assets/aos-master/dist/aos.css">

<div class="first">
    <img src="../../assets/img/humanikastore-circle.png" alt="">
    <h1>Humanika <br> Store</h1>
</div>

<form action="">
        <h1>Register Account</h1>
    <label for="">Username</label>
        <input type="text" placeholder="Masukan Username">
    <label for="">Email</label>
        <input type="text" placeholder="Masukan Email">
    <label for="">Password</label>
            <input type="text" placeholder="Masukan Password">
    <label for="">Re Type Password</label>
            <input type="text" placeholder="Masukan Ulang Password">
            <a href="login.php"><b>Sudah punya akun? Login disini!</b></a>
    <center><button>Daftar</button></center>
</form>

<script src="../../assets/aos-master//dist/aos.js"></script>
<script>
        AOS.init();
</script>



<?php
    include_once("../footer.php");
?>
