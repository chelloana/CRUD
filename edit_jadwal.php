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
    <title>Jadwal Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f7ebd3;
        }

        h3 {
            font-family: 'Segoe UI';
        }

        p {
            font-family: 'Segoe UI';
        }

        .btn-custom {
            color: #ffffff;
            background-color: #521908;
            border-color: #521908;
        }
    </style>
</head>

<body>
    <?php

    include "koneksi.php";
    $id_jadwal  = $_GET['id_jadwal'];
    $query      = mysqli_query($connect, "SELECT * FROM jadwal where id_jadwal=$id_jadwal");
    $data       = mysqli_fetch_array($query);

    ?>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">
                <font color="white">Praktikum IF | 123210139
            </a></font>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="jadwal.php">
                        <font color="white"><b>Jadwal</b>
                    </a></font>
                    <a class="nav-link" href="lab.php">
                        <font color="white">Lab
                    </a></font>
                    <a class="nav-link" href="waktu.php">
                        <font color="white">Waktu
                    </a></font>
                </div>
            </div>
            <a class="navbar-brand" href="logout.php">
                <font size="3" , color="grey">Logout</font>
            </a>
        </div>
    </nav>
    <br>
    <center>
        <div class="container m-5 p-4">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h3><b>Ubah Jadwal Praktikum</b></h3>
                    <hr>
                    <p><b>Ubah Jadwal Praktikum Sesuai yang diinginkan</b></p>
                    <br>
                    <form method="POST" action="editjadwal_proses.php?id_jadwal=<?= $_GET['id_jadwal'] ?>" class="row g-3">
                        <div class="col-8">
                            <input type="text" class="form-control" aria-label="mk" name="mk" value="<?= $data['mk'] ?>">
                        </div>
                        <div class="form-check col-2">
                            <input class="form-check-input" type="radio" name="jurusan" id="gridRadios1" value="<?= $data['jurusan'] ?>" <?php if ($data['jurusan'] == 'IF') echo 'checked' ?>>
                            <label class="form-check-label" for="gridRadios1">
                                IF
                            </label>
                        </div>
                        <div class="form-check col-2">
                            <input class="form-check-input" type="radio" name="jurusan" id="gridRadios2" value="<?= $data['jurusan'] ?>" <?php if ($data['jurusan'] == 'SI') echo 'checked' ?>>
                            <label class="form-check-label" for="gridRadios2">
                                SI
                            </label>
                        </div>
                        <div class="col-12">
                            <select name="id_lab" id="inputState" class="form-select">
                                <?php
                                $sql2    = "SELECT * FROM lab;";
                                $query2  = mysqli_query($connect, $sql2);
                                while ($data_lab = mysqli_fetch_array($query2)) {
                                    if ($data['id_lab'] == $data_lab['id_lab']) {
                                        $select = "selected";
                                    } else {
                                        $select = "";
                                    }
                                    echo "<option value=" . $data_lab['id_lab'] . " $select>" . $data_lab['lab'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <select name="id_waktu" id="inputState" class="form-select">
                                <?php
                                $sql3    = "SELECT * FROM waktu;";
                                $query3  = mysqli_query($connect, $sql3);
                                while ($data_waktu = mysqli_fetch_array($query3)) {
                                    if ($data['id_waktu'] == $data_waktu['id_waktu']) {
                                        $select = "selected";
                                    } else {
                                        $select = "";
                                    }
                                    echo "<option value=" . $data_waktu['id_waktu'] . " $select>" . $data_waktu['waktu_mulai'] . "-" . $data_waktu['waktu_selesai'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="d-grid gap-2 col-12 d-md-block">
                            <input type="submit" class="btn btn-dark btn-custom col-5">
                            <button type="reset" class="btn btn-dark btn-custom col-5">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>