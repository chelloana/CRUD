<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f7ebd3;
        }

        h4 {
            font-family: 'Segoe UI';
        }

        h2 {
            font-family: 'Segoe UI';
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand">Praktikum IF | 123210139</a>
            <a class="navbar-brand" href="logout.php">
                <font size="3" , color="grey">Logout</font>
            </a>
        </div>
    </nav>

    <br>
    <center>
        <div class="container p-5 m-5">
            <h4>Selamat Datang di</h4>
            <h2><b>Praktikum Informatika</b></h2>
            <br>
            <br>
            <div class="d-grid gap-2 d-md-block ">
                <a href="lab.php"><button class="btn btn-outline-dark col-4" type="button">Lab</button></a>
                <a href="waktu.php"><button class="btn btn-outline-dark col-4" type="button">Waktu Praktikum</button></a>
                <br><br>
                <a href="jadwal.php"><button class="btn btn-outline-dark col-8" type="button">Jadwal Praktikum</button></a>
            </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>