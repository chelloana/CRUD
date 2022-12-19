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
    <title>Lab Praktikum</title>
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
                        <font color="white">Jadwal
                    </a></font>
                    <a class="nav-link" href="lab.php">
                        <font color="white"><b>Lab</b>
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

        <div class="container p-5 m-5 text-center">
            <div class="row">
                <div class="col">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Lab</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <?php
                        include 'koneksi.php';
                        $sql    = "SELECT * FROM lab";
                        $query  = mysqli_query($connect, $sql);
                        $no     = 1;

                        while ($data = mysqli_fetch_array($query)) {
                        ?>

                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['lab']; ?></td>
                                    <td><a href=hapus_lab.php?id_lab=<?= $data['id_lab']; ?>><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
                                </tr>
                            </tbody>
                        <?php }    ?>
                    </table>

                </div>
                <div class="col">
                    <h3><b>Input Data Lab</b></h3>
                    <hr>
                    <p><b>Masukkan Ruangan Lab yang Tersedia</b></p>
                    <form method="POST" action="tambahlab_proses.php">
                        <div class="mb-3 row">
                            <label for="lab" class="col-sm-2 col-form-label"><b>Lab</b></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="lab" name="lab">
                            </div>
                        </div>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="submit" class="btn btn-dark btn-custom col-11">
                        </div>
                    </form>
                </div>
            </div>

    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>