<?php

session_start();

include "../includes/koneksi.php";
include "../includes/header.php";
$username = $_POST["username"];
$password = $_POST["password"];

$hash_password = md5($password);

$sql = "SELECT * FROM tb_pengguna WHERE username='$username' AND password='$hash_password'";
$sql_eksekusi = mysqli_query($koneksi, $sql);
$hitung = mysqli_num_rows($sql_eksekusi);
$data = mysqli_fetch_array($sql_eksekusi);
if ($hitung == 1) {
    $_SESSION['level'] = $data['level'];
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    header("Location:index.php");
} else {
    header("Location:index.php");
}
