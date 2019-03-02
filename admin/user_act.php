<?php

include '../config.php';

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "insert into tbl_user values('', '$nama', '$jabatan', '$alamat', '$username', '$password')");

header("location:user_view.php");

?>
