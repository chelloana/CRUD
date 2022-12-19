<?php

include "koneksi.php";
$id_jadwal    = $_GET['id_jadwal'];
$query  = mysqli_query($connect, "DELETE FROM jadwal where id_jadwal=$id_jadwal");

if ($query) {
    header("location: jadwal.php");
} else {
    echo "Data tidak berhasil dihapus <a href='jadwal.php'>Kembali</a>";
}
