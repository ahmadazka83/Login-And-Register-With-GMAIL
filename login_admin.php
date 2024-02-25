<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
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
        table{
            border-collapse: collapse;
            display: flex;
            justify-content: center;
        }
        td, th{
            border: solid 1px black;
            padding: 10px;
        }
        th{
            background-color: #04AA6D;
            color: white;
            text-shadow: 0.5px 0.5px black;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:nth-child(odd){
            background-color: lightgrey;
        }

    </style>
</head>
<body>
    <?php 
    session_start();

    //cek apakah yang mengakses ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan==gagal");
    }

    ?>

    <h1>Halaman Admin </h1>
    <p>Selamat <b> <?php echo $_SESSION['username']; ?> </b> Anda telah login sebagai <b> <?php echo $_SESSION['level']; ?> </b></p>
    <br>

    <h2>Data User dan Admin </h2>
    <table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <th>Email</th>
    </tr>

    <?php

    include 'koneksi.php';
    $conn = mysqli_connect($server, $username, $password, $database);
    $no = 1;
    $data = mysqli_query($conn, 'select * from user order by ID ASC');
    while($d = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?php echo $d['ID']; ?></td>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['password']; ?></td>
            <td><?php echo $d['level']; ?></td>
            <td><?php echo $d['email']; ?></td>
        </tr>
        <?php
    }
    ?>
    </table>

    <br><a href="forget5.php">Ganti Password</a><br>
    <br><a href="index.php">LOGOUT</a><br>
    
</body>
</html>