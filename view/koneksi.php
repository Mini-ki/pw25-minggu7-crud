<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "db_simpelah";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { 
    die("Gagal Terkoneksi Dengan Database!!");
}
?>