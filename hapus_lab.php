<?php

include "koneksi.php";
$id_lab    = $_GET['id_lab'];
$query  = mysqli_query($connect, "DELETE FROM lab where id_lab=$id_lab");

if ($query) {
    header("location: lab.php");
} else {
    echo "Data tidak berhasil dihapus <a href='lab.php'>Kembali</a>";
}
