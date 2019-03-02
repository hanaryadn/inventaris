<?php
session_start();

include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi,"select * from tbl_user where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);
$d = mysqli_fetch_array($data);
    if($cek > 0){
        $_SESSION['username'] = $d['username'];
        $_SESSION['nama'] = $d['nama'];
        $_SESSION['jabatan'] = $d['jabatan'];
        $_SESSION['status'] = "login";
    header("location:admin");
    }else{
    header("location:index.php?pesan=gagal");
    }
?>
