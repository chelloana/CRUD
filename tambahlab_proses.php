<?php

include 'koneksi.php';

$id_lab     = $_POST['id_lab'];
$lab        = $_POST['lab'];

$sql        = "INSERT INTO lab VALUES('$id_lab', '$lab')";
$query      = mysqli_query($connect, $sql);

if ($query) {
    header("location: lab.php");
} else {
    echo "Input data gagal";
}
