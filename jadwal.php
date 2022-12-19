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

        <div class="p-3 text-center">
            <div class="row">
                <div class="col">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Lab</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <?php
                        include 'koneksi.php';
                        $sql    = "SELECT jadwal.id_jadwal, jadwal.mk, jadwal.jurusan, lab.lab, waktu.waktu_mulai, waktu.waktu_selesai FROM jadwal JOIN waktu USING(id_waktu) JOIN lab USING(id_lab);";
                        $query  = mysqli_query($connect, $sql);
                        $no     = 1;

                        while ($data = mysqli_fetch_array($query)) {
                        ?>

                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['mk']; ?></td>
                                    <td><?= $data['jurusan']; ?></td>
                                    <td><?= $data['lab']; ?></td>
                                    <td><?= $data['waktu_mulai']; ?> - <?= $data['waktu_selesai']; ?></td>
                                    <td>
                                        <a href=edit_jadwal.php?id_jadwal=<?= $data['id_jadwal']; ?>><button type="button" class="btn btn-outline-warning">Edit</button></a>
                                        <a href=hapus_jadwal.php?id_jadwal=<?= $data['id_jadwal']; ?>><button type="button" class="btn btn-outline-danger">Delete</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php }    ?>
                    </table>

                </div>
                <div class="col-5">
                    <h3><b>Input Jadwal Praktikum</b></h3>
                    <hr>
                    <p><b>Buat Jadwal Praktikum Sesuai yang diinginkan</b></p>
                    <br>
                    <form method="POST" action="tambahjadwal_proses.php" class="row g-3">
                        <div class="col-8">
                            <input type="text" class="form-control" placeholder="Masukkan MK Praktikum" aria-label="mk" name="mk">
                        </div>
                        <div class="form-check col-2">
                            <input class="form-check-input" type="radio" name="jurusan" id="gridRadios1" value="IF">
                            <label class="form-check-label" for="gridRadios1">
                                IF
                            </label>
                        </div>
                        <div class="form-check col-2">
                            <input class="form-check-input" type="radio" name="jurusan" id="gridRadios2" value="SI">
                            <label class="form-check-label" for="gridRadios2">
                                SI
                            </label>
                        </div>
                        <div class="col-12">
                            <select name="id_lab" id="inputState" class="form-select">
                                <option disabled selected> Pilih </option>
                                <?php
                                $sql    = "SELECT * FROM lab;";
                                $query  = mysqli_query($connect, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?= $data['id_lab'] ?>"><?= $data['lab'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <select name="id_waktu" id="inputState" class="form-select">
                                <option disabled selected> Pilih </option>
                                <?php
                                $sql    = "SELECT * FROM waktu;";
                                $query  = mysqli_query($connect, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?= $data['id_waktu'] ?>"><?= $data['waktu_mulai'] ?>-<?= $data['waktu_selesai'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="d-grid gap-2 col-12 d-md-block">
                            <input type="submit" class="btn btn-dark btn-custom col-5">
                            <button type="reset" class="btn btn-dark btn-custom col-5">Reset</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>

    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>