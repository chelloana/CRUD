<?php

include "koneksi.php";

$id_jadwal  = $_GET['id_jadwal'];
$mk         = $_POST['mk'];
$jurusan    = $_POST['jurusan'];
$id_lab     = $_POST['id_lab'];
$id_waktu   = $_POST['id_waktu'];

$sql    = "UPDATE jadwal SET mk='$mk', jurusan='$jurusan', id_lab='$id_lab', id_waktu='$id_waktu' WHERE id_jadwal='$id_jadwal'";
$query  = mysqli_query($connect, $sql);

if ($query) {
    header("location: jadwal.php");
} else {
    echo "Data tidak berhasil diedit <a href='jadwal.php'>Kembali</a>";
}
