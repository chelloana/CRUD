<?php

include 'koneksi.php';

$id_waktu     = $_POST['id_waktu'];
$waktu_mulai  = $_POST['waktu_mulai'];
$waktu_selesai  = $_POST['waktu_selesai'];

$sql        = "INSERT INTO waktu VALUES('$id_waktu', '$waktu_mulai', '$waktu_selesai')";
$query      = mysqli_query($connect, $sql);

if ($query) {
    header("location: waktu.php");
} else {
    echo "Input data gagal";
}
