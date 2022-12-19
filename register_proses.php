<?php

include 'koneksi.php';

$id_user     = $_POST['id_user'];
$username     = $_POST['username'];
$password    = $_POST['password'];

$sql         = "INSERT INTO user VALUES('$id_user', '$username', '$password')";
$query        = mysqli_query($connect, $sql);

if ($query) {
    header("location: register.php");
} else {
    echo "Input data gagal";
}
