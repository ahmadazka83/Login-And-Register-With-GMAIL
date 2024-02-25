<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
</head>
<style>
    body{
        margin: 0;
        text-align: center;
        background-color: lightgreen;
        font-family: arial;
    }
    p{
        font-size: 18px;
    }
    h1{
        font-size: 32px;
        padding: 15px;
        margin-top: 0px;
        background-color: #5DBB63;
        color: white;
        text-shadow: 1px 1px black;
    }
</style>
<body>
    <?php
    session_start();

    //cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }

    ?>
    <h1> Halaman User </h1>
    <p>Selamat <b> <?php echo $_SESSION['username']; ?> </b> Anda telah login sebagai <b> <?php echo $_SESSION['level']; ?> </b></p>
    <br>
    <br><a href="forget5.php">Ganti Password</a><br>
    <br><a href="index.php">LOGOUT</a><br>
</body>
</html>