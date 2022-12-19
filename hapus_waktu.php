<?php

include "koneksi.php";
$id_waktu    = $_GET['id_waktu'];
$query  = mysqli_query($connect, "DELETE FROM waktu where id_waktu=$id_waktu");

if ($query) {
    header("location: waktu.php");
} else {
    echo "Data tidak berhasil dihapus <a href='waktu.php'>Kembali</a>";
}
