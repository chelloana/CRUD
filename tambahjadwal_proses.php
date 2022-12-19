<?php

include 'koneksi.php';

$id_jadwal   = $_POST['id_jadwal'];
$mk          = $_POST['mk'];
$jurusan     = $_POST['jurusan'];
$id_lab      = $_POST['id_lab'];
$id_waktu    = $_POST['id_waktu'];

$sql        = "INSERT INTO jadwal VALUES('$id_jadwal', '$mk', '$jurusan', '$id_lab', '$id_waktu')";
$query      = mysqli_query($connect, $sql);

if ($query) {
    header("location: jadwal.php");
} else {
    echo "Input data gagal";
}
